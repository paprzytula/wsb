<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
https://www.youtube.com/watch?v=mywbPC1TZnA&list=PLpzy7FIRqpGD0kxI48v8QEVVZd744Phi4&index=3
|
*/

Route::view('/', 'welcome');
Route::view('offers', 'offers');
Route::view('rodo','rodo');
Route::view('about-us', 'about');
Route::get('transfer', function ()
{
    return view('transfer.index');
});
Route::get('history', function ()
{
    return view('history.index');
});
Route::get('customers', function ()
{
    $customers = [
        'John Doe',
        'Jane Doe',
        'Bob Budowniczy',
    ];

    return view('internals.customers', ['customers' =>$customers]); //assigned an alias/key to the variable
});