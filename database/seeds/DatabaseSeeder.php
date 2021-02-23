<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    DB::table('persons')->insert([
      'first_name' => 'Whilce Renz',
      'middle_name' => 'Ancog',
      'last_name' => 'Macaambac',
      'birthdate' => '1998-12-13',
      'address_1' => 'iponan',
      'address_2' => 'bulua',
      'city_or_municipality' => 'cagayan de oro',
      'province' => 'Misamis Oriental',
      'postcode' => '9000',
      'salary' => '0',
    ]);
  }
}
