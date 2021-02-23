<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  //To disable laravel pluralization
  protected $table = 'persons';

  //To disable laravel created_at and updated_at timestamps
  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'first_name', 'middle_name', 'last_name', 'birthdate', 'address_1', 'address_2', 'city_or_municipality', 'province', 'postcode', 'salary',
  ];
}
