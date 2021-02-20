<?php
   Route::group(['middleware' => 'role:client'], function () {
    Route::get('dash', function(){

       return "client";
   });
   /* Client */

   /* dashboard Section */
Route::get('dashboard',function(){
    return view('client.dashboard');
})->name('client.dashboard');


/*myfavourites Section */
Route::get('myfavourites',function(){
    return view('client.myfavourites');
})->name('client.myfavourites');

  /* Booking Section */
Route::get('bookings',function(){
    return view('client.bookings');
})->name('client.bookings');


 /* My Status Section */
Route::get('mystatus',function(){
    return view('client.mystatus');
})->name('client.mystatus');

/* feedback Section */
Route::get('feedback',function(){
    return view('client.feedback');
})->name('client.feedback');


});
