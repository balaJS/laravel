<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auth extends Model
{
  protected $fillable = [
    'name',
    'email',
    'password'
  ];
}
