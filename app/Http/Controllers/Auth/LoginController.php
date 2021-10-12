<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    protected function redirectTo()
    {
        if (Auth::user()->statut==1) {
            if(Auth::user()->roles==1){
                Session::flash('alert-class','Vous êtes connté(es) avec succès');
                Session::flash('alert-class','alert-primary', 'text-center');
                return '/parent';
            }

            if(Auth::user()->roles==2){
                Session::flash('alert-class','Vous êtes connté(es) avec succès');
                Session::flash('alert-class','alert-primary', 'text-center');
                return '/nounou';
            }
            if(Auth::user()->roles==3){
                Session::flash('alert-class','Vous êtes connté(es) avec succès');
                Session::flash('alert-class','alert-primary', 'text-center');
                return '/structure';
            }

        } 
        
        else {
            $this->guard()->logout();
            Session::flash('alert-class', 'Vueillez attendre d\'être validé');
            Session::flash('alert-class', 'alert-primary', 'text-center');
            return '/login';
        }
    }
     
}