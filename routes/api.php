<?php

use Illuminate\Http\Request;

Route::post('/register', 'Api\UserController@register')->name('register.api');
Route::post('/login', 'Api\UserController@login')->name('login.api');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
