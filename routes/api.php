<?php

use Illuminate\Http\Request;

Route::post('/register', 'Api\UserController@register')->name('register.api');
Route::post('/login', 'Api\UserController@login')->name('login.api');

Route::post('/forgotPassword', 'Api\UserController@forgotPassword')->name('forgotPassword');

Route::middleware('auth:api')->group(function () {
    Route::get('/news', 'Api\NewsfeedController@getNews')->name('news.api');
    Route::get('/getAuthUser', 'Api\UserController@getUser')->name('getUser');
    Route::get('/logout', 'Api\UserController@logout')->name('logout');
    Route::put('/updateAuthUser', 'Api\UserController@update')->name('update');
    Route::post('/updatePassword', 'Api\UserController@updatePassword');

    Route::get('/feedback', 'Api\FeedbackController@getFeedback')->name('feedback.api');

    Route::post('/feedback/create', 'Api\FeedbackController@postFeedback')->name('feedback.create.api');

    Route::get('/country', 'Api\CountryController@getCountry')->name('country.api');

    Route::get('/category', 'Api\CategoryController@getCategory')->name('category.api');

    Route::get('/business', 'Api\BusinessController@getBusiness')->name('business.api');

    Route::get('/bookmark', 'Api\BookmarkController@getBookmark')->name('bookmark.api');

    Route::post('/bookmark/create', 'Api\BookmarkController@postBookmark')->name('bookmark.create.api');

    Route::post('/plan/create', 'Api\PlanController@postPlan')->name('plan.create.api');






});
