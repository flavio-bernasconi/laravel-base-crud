<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
 
 protected $table = 'people';
 protected  $fillable = [
    'firstname',
    'lastname',
    'age',
    'jobTitle'
  ];

}
