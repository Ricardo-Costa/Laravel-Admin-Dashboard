<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;

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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    protected function validateLogin(Request $request)
    {
        // TODO ..se != de admin, verificar se a escola relacionada ao usuário alu,resp,fun tá ativa
        try {
            $this->validate($request, [
                'email' => 'required|min:' . config('rules.email-minlength') . '|max:' . config('rules.email-maxlength'),
                'password' => 'required|min:' . config('rules.password-minlength') . '|max:' . config('rules.password-maxlength'),
            ]);
            return true;

        } catch(\Exception $e) {
            return back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request  $request)
    {
        // validar
        $this->validateLogin($request);

        // tenta autenticar por email
        if (\Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
            // verificar se estatus da pessoa é "banida"
            if (\Auth::user()->status == USER_STATUS_BANNED) {
                // impedir acesso
                $this->logout($request);
            } else {
                // setar status como ativo
                $user = \Auth::user();
                $user->status = USER_STATUS_ACTIVE;
                $user->save();
            }
            // Authentication passed...
            return redirect()->intended(\Auth::user()->role . '/dashboard');
            
        } else {
            
            return back();

        }
    }

}
