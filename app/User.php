<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mobile', 'email', 'address','username','password',
    ];

	  protected $table    = 'users';

    protected $guarded  = ['_token'];

    public static $rules = [
    	'name' 				  =>  'required|max:128',
      'mobile'        =>  'required|numeric',
      'email'         =>  'email',
      'address' 		  =>  'required|max:500',
      'date_of_joining' => 'required|date_format:Y-m-d',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
