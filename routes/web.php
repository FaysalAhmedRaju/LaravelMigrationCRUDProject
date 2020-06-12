<?php

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('','HomeController@Index')->name('/');


Route::post('login','LoginController@login')->name('user-log-in');
Route::get('/logout',  'LoginController@getLogout')->name('logout');

Route::get('accounts-welcome','AccountController@index')->name('account-index-view');
Route::get('open-view','AccountController@openView')->name('open-new-view');
Route::get('accounts-info','AccountController@getAccountInfo')->name('account-info-view');
Route::post('accounts-save','AccountController@saveAccountInfor')->name('save-account-info');

Route::post('accounts-update','AccountController@updateAccountInfor')->name('update-account-info');

Route::post('accounts-delete','AccountController@deleteAccountInfor')->name('delete-account-info');

Route::get('truck-bus-type','TruckBusController@truckBusView')->name('truck-bus-type-view');
Route::get('truck-bus-report','TruckBusController@reportView')->name('report-view');
Route::post('truck-bus/api/save-data', 'TruckBusController@truckBusSaveData')->name('export-truck-bus-type-save-data-api');
Route::get('truck-bus/api/all-vehicle-type-data/', 'TruckBusController@getAllVehicleTypeData')->name('export-truck-get-all-vehicle-type-data-api');
Route::post('truck/api/update-truck-bus-type-data', 'TruckBusController@updateTruckBusTypeData')->name('export-truck-update-truck-bus-type-data-api');
Route::get('truck/api/delete-vehicle-type-data/{id}', 'TruckBusController@deleteVehicleTypeData')->name('export-truck-delete-vehicle-type-data-api');
Route::get('truck/report/get-todays-truck-entry-report', 'TruckBusController@getTodaysTruckEntryReport')->name('export-truck-get-todays-truck-entry-report');

//----Post
Route::get('see-post-list-view','PostController@getPostInfo')->name('post-info-view');
Route::post('post-save','PostController@savePostInfor')->name('save-post-info');
Route::post('post-update','PostController@updatePostInfor')->name('update-post-info');
Route::post('post-delete','PostController@deletePostInfor')->name('delete-post-info');

//Route::get('accounts/id/edit','AccountController@edit');
//Route::get('accounts/id/delete','AccountController@delete');
//Route::post('accounts/store','AccountController@store');

//Route::resource('accounts','AccountController');
//Route::get('accounts/','Account.AccountController@index');

//Route::group(['namespace' => 'Account'], function () {
//
//    Route::get('accounts/','AccountController@index');
//});