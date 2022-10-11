<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthUserLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view("auth.login");
    }

    public function auth(AuthUserLoginRequest $request)
    {
        $data = $request->validated();
        $remember = (Arr::exists($data, 'remember_me')) ? $data['remember_me'] : false;
        $data = Arr::except($data, 'remember_me');
        if (Auth::attempt($data, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('blog')
                ->with(['success' => __('validation.msg.success_register')]);
        } else {
            return back()->withErrors(['error'=>__('validation.msg.error')])->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        \Session::flush();
        return redirect()->route('auth.guest');
    }
}
