<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

use MyBlog\User;
use MyBlog\Mail\welcome;


class RegistrationController extends Controller
{
    public function  create()
    {
    	return view('registration.create');
    }
    
    public function  store()
    {
    $this->validate(request(),[
    		
     'name' =>'required',
     'email' =>'required|email',	
     'password' =>'required|confirmed'
    		
    ]);	
    
    $user = User::create([
    		'name' =>request('name'),
    		'email'=>request('email'),
    		'password'=> bcrypt(request('password'))
    		
    		
    ]);
    
    auth()->login($user);
    
    \Mail::to($user)->send(new welcome($user));
    
    return redirect()->home();
    }
    
}
