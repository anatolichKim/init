<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUserRegisterRequest;
use App\Models\Users\EmailVerify;
use App\Models\Users\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use function Termwind\renderUsing;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = "auth.login";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function createUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function show()
    {
        return view("auth.register");
    }

    public function register(AuthUserRegisterRequest $request)
    {
        $data = $request->validated();
        $result = $this->createUser($data);
        if ($result) {

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
                ->with(['verify'=> __('auth.verify_email_fresh_message')]);
        }
         else {
            return back()->withErrors(['error'=>__('validation.msg.error')])->withInput();
        }
    }

}
