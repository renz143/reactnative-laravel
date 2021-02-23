<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Resources\Person as PersonResource;
use Illuminate\Http\Request;
use Validator;

class PersonController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Get Persons
    $persons = Person::all();

    // Return Persons collections as resource
    return PersonResource::collection($persons);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\person  $person
   * @return \Illuminate\Http\Response
   */
  public function show(Person $person)
  {
    // Return single Person as resource
    return new PersonResource($person);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $person = new Person;

    $validated = Validator::make($request->all(), [
      'first_name' => 'required',
      'middle_name' => 'nullable',
      'last_name' => 'required',
      'birthdate' => 'required',
      'address_1' => 'required',
      'address_2' => 'nullable',
      'city_or_municipality' => 'required',
      'province' => 'required',
      'postcode' => 'required',
      'salary' => 'nullable'
    ]);

    if ($validated->fails()) {
      return response()->json(['errors' => $validated->errors()]);
    } else {
      $person->first_name = $request->first_name;
      $person->middle_name = $request->middle_name;
      $person->last_name = $request->last_name;
      $person->birthdate = $request->birthdate;
      $person->address_1 = $request->address_1;
      $person->address_2 = $request->address_2;
      $person->city_or_municipality = $request->city_or_municipality;
      $person->province = $request->province;
      $person->postcode = $request->postcode;
      $person->salary = $request->salary;
      if ($person->save()) {
        return new PersonResource($person);
      }
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\person  $person
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Person $person)
  {
    $person->first_name = $request->first_name;
    $person->middle_name = $request->middle_name;
    $person->last_name = $request->last_name;
    $person->birthdate = $request->birthdate;
    $person->address_1 = $request->address1;
    $person->address_2 = $request->address_2;
    $person->city_or_municipality = $request->city_or_municipality;
    $person->province = $request->province;
    $person->postcode = $request->postcode;
    $person->salary = $request->salary;

    if ($person->save()) {
      return new PersonResource($person);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\person  $person
   * @return \Illuminate\Http\Response
   */
  public function destroy(Person $person)
  {
    if ($person->delete()) {
      return new PersonResource($person);
      return response([], 200);
    }
  }

  /**
   *   
   *  For Admin UI
   *
   **/

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\person  $person
   * @return \Illuminate\Http\Response
   */
  public function edit(Person $person)
  {
    //
  }
}
