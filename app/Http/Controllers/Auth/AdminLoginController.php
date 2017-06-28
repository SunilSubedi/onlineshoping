<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
class AdminLoginController extends Controller
{
	public function __construct()
	{
			$this->middleware('guest:admin')->except('logout');
	}
    public function index ()
    {
    	return view('auth.admin_login');
    }
    public function login(Request $request)
    {
    	$this->validate($request,[

    		 'email' => 'required|email',
    		 'password' => 'required'

    		]);
    	if(Auth::guard('admin')->attempt(['email'=> $request->email,'password'=> $request->password]))
    	{
    		//die('hello friend');
    		return redirect()->intended(route('dashboard'));
    	}
      
       return redirect()->back()->withInput($request->only('email','remember'));
    }
    public function logout()
    {
    	Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
