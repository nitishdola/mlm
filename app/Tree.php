<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
  protected $fillable = [
      'parent_id', 'child_id',
  ];

  protected $table    = 'trees';

  protected $guarded  = ['_token'];

  public static $rules = [
    'parent_id'  =>  'required|exists:users,id',
    'child_id'   =>  'required|exists:users,id',
  ];
}
