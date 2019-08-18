<?php

namespace CarSale\Http\Controllers\Auth;

use Illuminate\Http\Request;
use CarSale\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
   
      /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    
    protected function authenticated(Request $request, $user)
    {
        if ($request->ajax()){

            if(Auth::check()){
                return response()->json([
                    'auth' => auth()->check(),
                    'user' => $user,
                    'intended' => $this->redirectPath(),
                ],200);
            }else{
                return response()->json([
                    'auth' => auth()->check(),
                    'user' => $user,
                    'intended' => $this->redirectPath(),
                ],407);
            }
        }
            
    }

/*
    public function login(Request $request){
        $email = $request->input('mail');
        $password = $request->input('pass');
        if (Auth::attempt(array('email' => $email, 'password' => $password))){
            return 'success';
        }
            return 'failed';
    }*/
}
