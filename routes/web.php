<?php

use App\Models\Person;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    $person = Person::first();
    $person['full_name'] = $person->first_name . ' ' . $person->last_name;
    dd($person['full_name']);
});

Route::get('/person', function () {
    $person = Person::find(2);
    dd($person->first_name);
});

Route::get('/full', function () {
    $person = Person::find(2);
    $fullName = $person->full_name;
    dd($fullName);
});

Route::get('/create', function () {
    $person = Person::create([
        'first_name' => 'tsubasa',
        'last_name' => 'ojora',
        'address' => 'rumah tsubasa',
    ]);
    dd($person);
});
