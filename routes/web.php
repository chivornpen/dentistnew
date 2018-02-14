<?php
Route::get('/','defaultController@index');

Route::middleware(['auth','islog'])->group(function () {

    Route::get('/home','defaultController@index')->name('home');
    Route::resource('/branch','branchController');
    Route::resource('/user','userController');

});
Auth::routes();

