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
    Route::delete('bank-detail/{id}', 'BankController@buangBank');
});
Route::group(['prefix' => 'view'], function () {
    //start invest
    Route::get('deposit', 'ShareController@deposit');
    Route::post('deposit', 'ShareController@depositSaved');
    //history
    Route::get('fund-history', 'ShareController@history');

    //request withdrawal
    Route::get('withdrawal', 'WithdrawController@create');
    Route::post('withdrawal', 'WithdrawController@store');
    Route::get('request-withdrawal', 'WithdrawController@view');
});
    // referrals link was here
    Route::get('referrals', 'InviteController@index') ; // remember hard code at upper line first.
    Route::get('ref/{invitecode}', 'InviteController@registerRef') ;
