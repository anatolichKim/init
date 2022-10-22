<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUserForgetPasswordRequest;
use App\Models\Users\PasswordReset;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    protected function create(array $data) {
        return PasswordReset::create([
            'email' => $data['email'],
            'token' => Str::random(64),
        ]);
    }

    public function show() {
        return view('auth.passwords.forgot');
    }

    public function forgetPassword(AuthUserForgetPasswordRequest $request)
    {
        $data = $request->validated();
        $result = $this->create($data);

        Mail::send('user.email.forgetPassword', ['token' => $result['token'], 'email'=>$data['email']], function($message) use($result){
            $message->to($result['email']);
            $message->subject('Reset Password');
        });

        return back()->with(['success' => __('validation.msg.success_register')]);
    }
}
