<?php

use Illuminate\Http\Request;

Route::post('/register', 'Api\UserController@register')->name('register.api');
Route::post('/login', 'Api\UserController@login')->name('login.api');

Route::get('/category', 'Api\CategoryController@getCategory')->name('category.api');

Route::get('/banner/get','Api\BannerController@getbanner')->name('banner.get');

Route::get('/business/limit','Api\BusinessController@getlimitbusiness')->name('business.limit');

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


    Route::post('/business', 'Api\BusinessController@getBusiness')->name('business.api');

    Route::post('/business/create', 'Api\BusinessController@postBusiness')->name('business.create.api');

    Route::get('/bookmark', 'Api\BookmarkController@getBookmark')->name('bookmark.api');

    Route::post('/bookmark/create', 'Api\BookmarkController@postBookmark')->name('bookmark.create.api');

    Route::post('/plan/create', 'Api\PlanController@postPlan')->name('plan.create.api');

    Route::post('/business/category', 'Api\BusinessController@getBusinessCategory')->name('business.category.api');


    Route::post('/business/find','Api\BusinessController@findbusiness')->name('business.find');


    Route::get('/event/get','Api\EventController@getevent')->name('event.get');

    Route::post('/business/rating','Api\BusinessController@posttbusinessrating')->name('business.rating');

    Route::post('/business/count','Api\CountryController@getbusinesscount')->name('business_count');

    Route::post('/business/country','Api\CountryController@getcountrybusiness')->name('business_count');

    Route::post('/business/rating/get','Api\BusinessController@businessrating')->name('business.rating.get');

    Route::post('/business/request/post','Api\BusinessController@businessrequest')->name('business.request');

    Route::get('/pdf/get','Api\PlanController@pdfget')->name('pdfget');

    Route::post('/reset/email/sent','Api\ResetEmailController@forgotPassword')->name('reset.email.sent');

});
