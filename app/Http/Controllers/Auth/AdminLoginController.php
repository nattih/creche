<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function __construct()
{
$this->middleware('guest:admin')->except('logout');
}

public function showLoginForm()
{
return view('auth.admin_login');
}

public function login(Request $request)
{
    // Validate form data
    $this->validate($request, [
    'email' => 'required|email',
    'password' => 'required|min:4'
    ]);
    // Attempt to log the user in
    if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],
    $request->remember))
    {
    return redirect()->intended(route('dashboard'));
    }
    // if unsuccessful
    return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout(Request $request)
    {   
        Auth::guard('admin')->logout();
        return redirect('/admin-login');
    }
}
