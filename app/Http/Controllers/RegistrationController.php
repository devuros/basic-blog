<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    
	public function create()
	{

		return view('registration.create');

	}

	public function store(RegistrationRequest $request)
	{

		$this->validate(request(), [

			'name'=> 'required',
			'email'=> 'required|email',
			'password'=> 'required|confirmed'

		]);

		// It's vital that the field is named password_confirmation

		$user = User::create([
		
			'name'=> request('name'),
			'email'=> request('email'),
			'password'=> bcrypt(request('password'))

		]);

		auth()->login($user);

		// Za slanje maila korisniku kada se registruje
		\Mail::to($user)->send(new Welcome($user));


		//	Session handling
		session()->flash('message', 'Thanks so much for singning up!');

		// return redirect('/');
		return redirect()->home();

	}

}
