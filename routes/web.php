<?php

Route::view('/', 'home', ['name' => 'home']);

Route::redirect('/home', '/');

Route::get('/login', 'Auth\LoginController@loginView')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('post_login');
