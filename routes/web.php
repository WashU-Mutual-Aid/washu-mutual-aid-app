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

Route::get('/', 'HomepageController@index')->name('homepage');

Auth::routes(['verify' => true]);
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/me/aid', 'UserAidController@index')->name('me.aid');
    Route::get('/me', 'UserController@show')->name('me');
    Route::patch('/me', 'UserController@update')->name('me.profile.update');
    Route::patch('/me/payments', 'UserPaymentsController@update')->name('me.payments.update');
    Route::patch('/me/password', 'UserPasswordController@update')->name('me.password.update');

    Route::view('/aid', 'aid.create')->name('aid.create');
    Route::post('/aid', 'AidController@store')->name('aid.store');
    Route::delete('/aid/{aid}', 'AidController@destroy')->name('aid.destroy');

});
