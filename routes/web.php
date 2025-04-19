<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(CrudController::class)->group(function () {
    // for show user
    Route::get('/', 'showuser');
    // for single user
    Route::get('/view/{id}', 'singleuser')->name('view.user');
    // for insert user
    Route::post('/insert', 'insertuser')->name('insert.user');
    // for get user data
    Route::get('/update/{id}', 'updateuser')->name('update.user');
    // for update user
    Route::post('/update/{id}', 'updatedata');
    // for delete user
    Route::get('/delete/{id}', 'deleteuser')->name('delete.user');
});

// register means a file name register.blade.php
route::view('newuser','/register');

