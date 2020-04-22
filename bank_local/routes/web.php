<?php
use Illuminate\Support\Facades\Input;
use WSB_BANK\User;

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
   return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deposit', 'HomeController@deposit')->name('deposit');
Route::post('/deposit', 'HomeController@saveDeposit')->name('saveDeposit');
Route::get('/withdraw', 'HomeController@withdraw')->name('withdraw');
Route::post('/withdraw', 'HomeController@saveWithdraw')->name('saveWithdraw');
Route::get('/transfer', 'HomeController@transfer')->name('transfer');
Route::post('/transfer', 'HomeController@saveTransfer')->name('saveTransfer');
Route::get('/statement', 'HomeController@statement')->name('statement');
Route::get('/admin', function(){
return 'you are admin';
})->middleware(['auth', 'auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){ //remember to add a DOT
   Route::resource('/users', 'UserController', ['except'=>['show', 'create', 'store']]); //hide disabled functions
});

 
            /*  $user = User::where('first_name','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->orWhere('last_name','LIKE','%'.$q.'%')->orWhere('pesel','LIKE','%'.$q.'%')->get();
             }
             return 'Nic nie znaleziono. Spróbuj jeszcze raz.';*/
 
    