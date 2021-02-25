<?php

use Illuminate\Http\Request;

Route::post('/register', 'Api\UserController@register')->name('register.api');
Route::post('/login', 'Api\UserController@login')->name('login.api');

Route::middleware('auth:api')->group(function () {
    Route::get('/news', 'Api\NewsfeedController@getNews')->name('news.api');

});
