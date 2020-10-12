<?php

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
    return view('welcome');
});

Route::get('pizza', 'PizzaController@index')->middleware('auth');
Route::get('pizza/create', 'PizzaController@create'); //putting it above pizza/{id} to stop in from going to show
Route::post('pizza', 'PizzaController@store');
Route::get('pizza/{id}', 'PizzaController@show')->middleware('auth');;
Route::delete('pizza/{id}', 'PizzaController@destroy')->middleware('auth');;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Retrieveing data from models directly, $pizza is basically id here
Route::get('post/{pizza}', function(App\Pizza $pizza){
	return $pizza->name;
});

Route::get('/limit-access', function(){
	return('shhhhh');
})->middleware('throttle:2|60,1');