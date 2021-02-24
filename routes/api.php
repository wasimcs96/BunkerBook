<?php

use Illuminate\Http\Request;

Route::post('/register', 'Api\UserController@register')->name('register.api');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
   
Route::get('/news', 'Api\NewsfeedController@index')->name('news.api');


});
