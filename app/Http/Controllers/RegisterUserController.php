<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
	public function create()
	{
		return view('auth.register');
	}
	
	public function store()
	{	
		// validate
		$attrib = request()->validate([
			'first_name'	=> ['required'],
			'last_name'		=> ['required'],
			'email'			=> ['required', 'email'],
			'password'		=> ['required', Password::min(6), 'confirmed'], // password_confirmation
		]);
		
		// create the user
		$user = User::create($attrib);
		
		// log in
		Auth::login($user);
		
		// redirect somewhere
		return redirect('/jobs');
	}
}
