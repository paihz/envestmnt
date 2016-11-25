<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'DashboardController@index');

Route::group(['prefix' => 'profile'], function () {
    Route::get('index', 'ProfileController@index');
    Route::post('index', 'ProfileController@addProfile');
    Route::put('index', 'ProfileController@editProfile');
    //password
    Route::get('chang-pass', 'ProfileController@changePass');
    Route::post('chang-pass', 'ProfileController@changeNewPass');
    //bank
    Route::get('bank-detail', 'BankController@index');
    Route::post('bank-detail', 'BankController@simpanBank');
});
