<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

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

	public static $rules = array(
	    'role'    => 'required|max:6',
	    'fname'   => 'required|max:200',
	    'lname'   => 'required|max:200',
	    'phone'   => 'required|max:10',
	    'email'   => 'required|email',
	    'nickname' => '',
	    'size_allowed' => '',
	    'password'	=> ''
);

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = Hash::make($value);
	}


	public function dog()
	{
		return $this->hasOne('Dog');
	}


	public function location()
	{
		return $this->hasOne('Location');
	}



}
