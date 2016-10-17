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
        'name', 'parent_id', 'guardian_name', 'date_of_birth', 'date_of_joining', 'village', 'post_office', 'district_id', 'mobile', 'email', 'address','username','password',
    ];

	  protected $table    = 'users';

    protected $guarded  = ['_token'];

    public static $rules = [
        'name' 				=>  'required|max:128',
        'mobile'            =>  'required|numeric|unique:users',
        'email'             =>  'email',
        'address' 		    =>  'max:500',
        'date_of_joining'   => 'required|date_format:Y-m-d',
        'date_of_birth'     => 'date_format:Y-m-d',
        'district_id'       => 'required'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function parent()
    {
        return $this->belongsTo('App\User', 'parent_id');
    }

    public function child()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function district()
    {
        return $this->belongsTo('App\District', 'district_id');
    }
}
