<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;
use Hash;

class LoginController extends Controller
{
    public function store()
    {
    	//validate the form
    	request()->validate([
    		//rules
    		'username' => 'required',
    		'password' => 'required'
    	]);
    	//attempt to login
    	if(!Auth::attempt(['username' => request()->username, 'password' => request()->password])){
    		//if not, redirect back with an error message
    		return redirect('/')->withErrors(['Invalid credentials']);
    	}
    	return redirect('/dashboard');
    	//if successful, then redirect to the dashboard
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/');
    }


    public function showChangePasswordForm(){

         $user = User::first();
      return view('auth.changepassword', compact('user'));

    }

        public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }
 
}
