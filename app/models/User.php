<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	public $timestamps = false;
	public $fillable = ['username','email'];

	public static $rules = [
		'username' => 'required|unique:users',
		'email' => 'required|email|unique:users',
		'password' => 'required|min:4'
	];

	public static $errors;

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


	public static function isValid()
	{
		$validation = Validator::make(Input::all(), User::$rules);

		if($validation->passes()) return true;

		User::$errors = $validation->errors();
		return false;
	}

}
