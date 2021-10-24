<?php
//Route::get('/', function () {
//    return view('welcome');
//});

//
//Route::get('/demo', function () {
//    return view('pages.appearance_content_grid');
//});
Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard_demo', function () {
    return view('pages.dashboard');
});
//crude functions
Route::resource('/user','UserController');
Route::post('/search','UserController@search')->name('user.search');

Route::resource('/library','StudentController');
Route::resource('/employee','EmployeeController');
Route::resource('/bank','BankController');

// end crude functions





