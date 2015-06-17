<?php namespace App\Services;

use App\Modles\Admin;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class RegService implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:255',
			'email'    => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return Admin::create([
			'username' => $data['username'],
			'email'    => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
