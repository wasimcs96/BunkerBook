<?php
// dd(Auth::check());
// Auth::routes();
// Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => 'role:superadmin'], function () {
 Route::get('dash', function(){

    return "admin";
});

Route::get('mypage/index','MypageController@index')->name('mypage.index');

});

Route::get('/', function () {
    return view('frontEnd.index');
})->name('front');



