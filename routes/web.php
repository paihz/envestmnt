<?php


Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('home', 'DashboardController@index');
Route::get('agreement', 'DashboardController@agreement');
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
    Route::delete('bank-detail/{id}', 'BankController@buangBank');
});
Route::group(['prefix' => 'view'], function () {
    //start invest
    Route::get('deposit', 'ShareController@deposit');
    Route::post('deposit', 'ShareController@depositSaved');
    //history
    Route::get('fund-history', 'ShareController@history');

    //request withdrawal
    Route::get('withdrawal-all', 'WithdrawController@senaraiKeluar');
    Route::get('withdrawal-all/{id}', 'WithdrawController@sendToWallet');
    Route::get('withdrawal', 'WithdrawController@create');
    Route::post('withdrawal', 'WithdrawController@store');
    Route::get('request-withdrawal', 'WithdrawController@view');
});
    // referrals link was here
    Route::get('referrals', 'InviteController@index') ; // remember hard code at upper line first.
    Route::get('ref/{invitecode}', 'InviteController@registerRef') ;

    //Admin Pages
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    //deposit
    Route::get('deposit', 'AdminController@depositIndex');
    Route::get('deposit-edit/{id}', 'AdminController@depositEdit');
    Route::post('deposit-update/{id}', 'AdminController@depositUpdate');
    //share per lot
    Route::get('share-per-lot', 'AdminController@shareIndex');
    Route::post('share-per-lot', 'AdminController@shareUpdate');
});
//Agent Pages
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    //deposit
    Route::get('deposit', 'AdminController@depositIndex');
    Route::get('deposit-edit/{id}', 'AdminController@depositEdit');
    Route::post('deposit-update/{id}', 'AdminController@depositUpdate');
    //share per lot
    Route::get('share-per-lot', 'AdminController@shareIndex');
    Route::post('share-per-lot', 'AdminController@shareUpdate');
});
