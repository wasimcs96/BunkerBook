<?php
   Route::group(['middleware' => 'role:consultant'], function () {
    Route::get('dash', function(){

       return "consultant";
   });
   /* Consultant */


/* dashboard Section */
Route::get('dashboard',function(){
    return view('consultant.dashboard');
})->name('consultant.dashboard');

/* Student Section */
Route::get('students',function(){
    return view('consultant.students');
})->name('consultant.students');


/* Search Section */
Route::get('search',function(){
    return view('consultant.search');
})->name('consultant.search');


/* Booking Section */
Route::get('bookings',function(){
    return view('consultant.bookings');
})->name('consultant.bookings');


/* applied Section */
Route::get('applied',function(){
    return view('consultant.applied');
})->name('consultant.applied');

/* offer recieved Section */
Route::get('offerrecieved',function(){
    return view('consultant.offerrecieved');
})->name('consultant.offerrecieved');

/* accepted Section */
Route::get('accepted',function(){
    return view('consultant.accepted');
})->name('consultant.accepted');

/* readytofly Section */
Route::get('readytofly',function(){
    return view('consultant.readytofly');
})->name('consultant.readytofly');

/* prmigration Section */
Route::get('prmigration',function(){
    return view('consultant.prmigration');
})->name('consultant.prmigration');

/* services Section */
Route::get('services',function(){
    return view('consultant.services');
})->name('consultant.services');

/* gopremium Section */
Route::get('gopremium',function(){
    return view('consultant.gopremium');
})->name('consultant.gopremium');

/* universityrequest Section */
Route::get('universityrequest',function(){
    return view('consultant.universityrequest');
})->name('consultant.universityrequest');

/* adevents Section */
Route::get('adevents',function(){
    return view('consultant.adevents');
})->name('consultant.adevents');

/* duesbilling Section */
Route::get('duesbilling',function(){
    return view('consultant.duesbilling');
})->name('consultant.duesbilling');

/* feedback Section */
Route::get('feedback',function(){
    return view('consultant.feedback');
})->name('consultant.feedback');

});
