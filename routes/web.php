<?php
Route::get('/','defaultController@index');

Route::middleware(['auth','islog'])->group(function () {

    Route::get('/home','defaultController@index')->name('home');
<<<<<<< HEAD
    Route::resource('branch','branchController');
    Route::resource('user','userController');
    Route::resource('staff','StaffController');
=======
    Route::resource('/branch','branchController');
    Route::resource('/user','userController');

>>>>>>> 07d0836798831af0aedd511ddacc44c52fb5a0df
});
Auth::routes();

