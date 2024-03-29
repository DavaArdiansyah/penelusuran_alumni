<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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

    public function login(Request $request)
    {
        $input = $request->all();
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if(auth()->user()->id_role == 3){
                return redirect()->route('Admin.dashboard');
            } else if(auth()->user()->id_role == 2){    
                return redirect()->route('Operator.dashboard');
            // }
            // else if(auth()->user()->id_role == 3){
            //     return redirect()->route('Alumni.dashboard');
            } else{
                return redirect()->route('homepage');
            }
        }else {
            return redirect()->route('login')->with('error','Email Address And Password Are Wrong');
        }
    }
}
