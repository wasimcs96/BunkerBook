<?php
   Route::group(['middleware' => 'role:university'], function () {
    Route::get('dash', function(){

       return "university";
   });
   /* University */

/* dashboard Section */
Route::get('dashboard',function(){
    return view('university.dashboard');
})->name('university.dashboard');

   /* Students Section */
Route::get('students',function(){
    return view('university.students');
})->name('university.students');


  /* Courses Section */
Route::get('courses',function(){
    return view('university.courses');
})->name('university.courses');

/* services Section */
Route::get('sservices',function(){
    return view('university.services');
})->name('university.services');

/* introtoconsultant Section */
Route::get('introtoconsultant',function(){
    return view('university.introtoconsultant');
})->name('university.introtoconsultant');

/* gopremium Section */
Route::get('sgopremium',function(){
    return view('university.gopremium');
})->name('university.gopremium');

/* adevents Section */
Route::get('sadevents',function(){
    return view('university.adevents');
})->name('university.adevents');

});
