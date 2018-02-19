<?php

Route::get('/','defaultController@index');

Route::middleware(['auth','islog'])->group(function () {
//
    Route::get('/home','defaultController@index')->name('home');
    Route::resource('branch','branchController');
    Route::resource('user','userController');
    Route::resource('staff','StaffController');
    Route::resource('/branch','branchController');
    Route::resource('/user','userController');
<<<<<<< HEAD
//
=======
>>>>>>> 2a9b4e115e00cd568736fe1cdb9d4c179bb508b9
});
Auth::routes();

