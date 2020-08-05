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

Route::prefix('/users')->group(function(){
    Route::get('register', 'UserController@showFormRegister')->name('users.showFormRegister');
    Route::get('login', 'UserController@showFormLogin')->name('users.showFormLogin');
    Route::post('data', 'UserController@login')->name('users.login');
    Route::middleware('checkAge')->group(function(){
        Route::post('register', 'UserController@register')->name('users.register');
    });
});

Route::prefix('customers')->group(function (){
    Route::get('/', 'CustomerController@index')->name('customers.index');
});
Route::group(['prefix' => 'customers'], function (){
    Route::get('/', 'CustomerController@index')->name('customers.index');
});
