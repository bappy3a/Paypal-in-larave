<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/paypal', 'HomeController@paypal')->name('paypal');
Route::post('add/customer/data', 'HomeController@post');
Route::get('alldata', 'HomeController@alldata')->name('alldata');
Route::any('updata/{id}', 'HomeController@updata')->name('updata');

Route::group(['middleware' => ['web']], function () {
    Route::get('payPremium', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);
    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
    Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);
    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);
});