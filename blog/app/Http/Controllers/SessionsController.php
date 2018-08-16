<?php

namespace MyBlog\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('guest', ['except'=>'destroy']);
	}
	
	
	
	public function create()
	{
		return view('sessions.create');
	}
	
	public function store()
	{
		// versuchen User authentifizieren
		if(!auth()->attempt(request(['email','password'])))
		{
		// wenn nicht zurück
		return back()->withErrors([
				
				'massage' => 'Bitte Ihre Eingaben prüfen' 
		]);
		}
		return redirect()->home();
	}
	
	public function destroy()
	{
		auth()->logout();
		
		return redirect()->home();
	}
}
