<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('persons', function (Blueprint $table) {
      $table->increments('id');
      $table->string('first_name');
      $table->string('middle_name');
      $table->string('last_name');
      $table->string('birthdate');
      $table->string('address_1');
      $table->string('address_2');
      $table->string('city_or_municipality');
      $table->string('province');
      $table->string('postcode');
      $table->string('salary');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('persons');
  }
}
