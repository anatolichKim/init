<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUserVerifyEmailRequest;
use App\Http\Requests\AuthUserVerifyEmailResendRequest;
use App\Http\Requests\AuthUserVerifyEmailShowRequest;
use App\Models\Users\EmailVerify;
use App\Models\Users\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerifyEmailController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show(AuthUserVerifyEmailShowRequest $request){
        $data = $request->validated();
        return view('auth.verify', ['email'=> $data['email']]);
    }

    public function resend(AuthUserVerifyEmailResendRequest $request) {
        $data = $request->validated();

        EmailVerify::where(['email' => $data['email']])->delete();

        $emailVerificationData = EmailVerify::create([
            'email' => $data['email'],
            'token' => Str::random(64)
        ]);

        Mail::send('user.email.verifyEmail',
            ['token' => $emailVerificationData['token'], 'email' => $emailVerificationData['email']],
            function ($message) use ($emailVerificationData) {
                $message->to($emailVerificationData['email']);
                $message->subject('Verify email');
            });

        return redirect()->route('auth.email-verification', ['email'=>$emailVerificationData['email']])
            ->with(['verify' => __('auth.verify_email_refresh_message')]);
    }


    public function verify(AuthUserVerifyEmailRequest $request)
    {
        $data = $request->validated();
        $isUserTokenValid = EmailVerify::where(
            [
                'email' => $data['email'],
                'token' => $data['token']
            ], 1)
            ->firstOrFail();

        if (!$isUserTokenValid) {
            return redirect()->route('auth.email-verification', ['email'=>$isUserTokenValid['email']])
                ->withErrors(['invalid_token' => __('validation.msg.token')]);
        }

        $user = User::where('email', $data['email'])
            ->update(['email_verified_at' => Carbon::now()]);

        EmailVerify::where(['email' => $data['email']])->delete();

        if ($user) {
            return redirect()->route('auth.login')
                ->with(['success' => __('validation.msg.success_email_verify')]);
        } else {
            return back()->withErrors(['error' => __('validation.msg.token')]);
        }
    }
}
