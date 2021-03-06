<?php

use App\Http\Controllers\CustomerController;

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
// use App\Mail\WelcomeMail;

// Route::get('/email', function () {
//     Mail::to('email@email.com')->send(new WelcomeMail());
//     return new WelcomeMail();
// });

Route::get('/about', 'HelloController@about');


Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('customers/{customer}', 'CustomerController@show');
Route::get('customers/{customer}/edit', 'CustomerController@edit');
Route::patch('customers/{customer}', 'CustomerController@update'); // HERE is PATCH, not GET nor POST
Route::delete('customers/{customer}', 'CustomerController@destroy');
