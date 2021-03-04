<?php

Route::get('/', function () {
    return view('frontEnd.index');
})->name('front');


Route::get('consultant',function (){
    return view('frontEnd.consultant.consultant');
})->name('consultant');

Route::get('consultant/book', function(){
    return view('frontEnd.consultant.book');
})->name('consultant.book');

Route::get('university', function(){
    return view('frontEnd.university.university');
});

Route::group([
    'namespace' => 'Auth',
], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login_page');
    Route::post('login', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
    Route::post('register', 'RegisterController@register')->name('register');
    Route::get('register/activate/{token}', 'RegisterController@confirm')->name('email_confirm');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

});

Route::get('home', 'UserController@index')->name('home');

// users.....
Route::get('/user/index', 'admin\adminusercontroller@index')->name('users.index');
Route::get('/user/create', 'admin\adminusercontroller@create')->name('users.create');
Route::post('/user/store', 'admin\adminusercontroller@store')->name('users.store');
Route::get('/user/show/{id}', 'admin\adminusercontroller@show')->name('users.show');
Route::post('/user/update/{id}', 'admin\adminusercontroller@update')->name('users.update');
Route::get('/user/edit/{id}', 'admin\adminusercontroller@edit')->name('users.edit');
Route::get('/user/destroy/{id}', 'admin\adminusercontroller@destroy')->name('users.destroy');
Route::get('/user/tansaction/{id}', 'Admin\AdminUserController@tansaction')->name('users.tansaction');

// category.......
Route::get('/category', 'admin\admincategorycontroller@index')->name('category.index');
Route::post('/category/create', 'admin\admincategorycontroller@create')->name('category.create');
Route::post('/category', 'admin\admincategorycontroller@store')->name('category.store');
Route::get('/category/show/{id}', 'admin\admincategorycontroller@show')->name('category.show');
Route::post('/category/update/{id}', 'admin\admincategorycontroller@update')->name('category.update');
Route::get('/category/edit/{id}', 'admin\admincategorycontroller@edit')->name('category.edit');
Route::get('/category/destroy/{id}', 'admin\admincategorycontroller@destroy')->name('category.delete');

// plan.......
Route::get('/plan', 'admin\adminplancontroller@index')->name('plan.index');
// Route::get('/plan/create', 'admin\adminplancontroller@create')->name('plan.create');
// Route::post('/plan', 'admin\adminplancontroller@store')->name('plan.store');
Route::get('/plan/show/{id}', 'admin\adminplancontroller@show')->name('plan.show');
Route::post('/plan/{id}', 'admin\adminplancontroller@update')->name('plan.update');
Route::get('/plan/edit/{id}', 'admin\adminplancontroller@edit')->name('plan.edit');
// Route::get('/plan/destroy/{id}', 'admin\adminplancontroller@destroy')->name('plan.destroy');

// news.......
Route::get('/news', 'admin\adminnewsfeedcontroller@index')->name('news.index');
Route::post('/news/create', 'admin\adminnewsfeedcontroller@create')->name('news.create');
Route::post('/news', 'admin\adminnewsfeedcontroller@store')->name('news.store');
Route::get('/news/show/{id}', 'admin\adminnewsfeedcontroller@show')->name('news.show');
Route::post('/news/{id}', 'admin\adminnewsfeedcontroller@update')->name('news.update');
Route::get('/news/edit/{id}', 'admin\adminnewsfeedcontroller@edit')->name('news.edit');
Route::get('/news/destroy/{id}', 'admin\adminnewsfeedcontroller@destroy')->name('news.destroy');

// Transaction....
Route::get('/transaction', 'Admin\AdminTransactioncontroller@index')->name('transaction.index');
//feedback
route::get('feedback/all','admin\adminfeedbackcontroller@index')->name('admin.feedback');

Route::get('index', function(){
    return view('frontEnd.index');
})->name('frontend.index');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return redirect('index'); });

/* My Page */
Route::get('mypage', function ()                { return redirect('mypage/index'); });
Route::get('mypage/index',                      'MypageController@index')->name('mypage.index');
Route::get('mypage/index4',                     'MypageController@index4')->name('mypage.index4');
Route::get('mypage/index5',                     'MypageController@index5')->name('mypage.index5');
Route::get('mypage/index6',                     'MypageController@index6')->name('mypage.index6');
Route::get('mypage/index7',                     'MypageController@index7')->name('mypage.index7');
Route::get('mypage/index8',                     'MypageController@index8')->name('mypage.index8');
Route::get('mypage/index9',                     'MypageController@index9')->name('mypage.index9');
Route::get('mypage/index10',                    'MypageController@index10')->name('mypage.index10');

/* My Page */
// Route::get('dashboard', function ()             { return redirect('dashboard/index2'); });
Route::get('admin/panel',                  'DashboardController@index2')->name('admin.panel');
// Route::get('dashboard/index3',                  'DashboardController@index3')->name('dashboard.index3');


/* App */
Route::get('contact', function ()               { return redirect('contact/contact'); });
Route::get('contact/contact',                   'ContactController@contact')->name('contact.contact');
Route::get('contact/contact2',                  'ContactController@contact2')->name('contact.contact2');

/* App */
Route::get('app', function ()                   { return redirect('app/contact'); });
Route::get('app/calendar',                      'AppController@calendar')->name('app.calendar');

/* email */
Route::get('email', function ()                 { return redirect('email/inbox'); });
Route::get('email/inbox',                       'EmailController@inbox')->name('email.inbox');
Route::get('email/compose',                     'EmailController@compose')->name('email.compose');
Route::get('email/inboxdetail',                 'EmailController@inboxdetail')->name('email.inboxdetail');

/* messenger */
Route::get('messenger', function ()             { return redirect('messenger/chat'); });
Route::get('messenger/chat',                    'MessengerController@chat')->name('messenger.chat');

/* Icons */
Route::get('icon', function ()                  { return redirect('icon/fontawesome'); });
Route::get('icon/fontawesome',                  'IconController@fontawesome')->name('icon.fontawesome');
Route::get('icon/iconsline',                    'IconController@iconsline')->name('icon.iconsline');
Route::get('icon/themify',                      'IconController@themify')->name('icon.themify');

/* Components  */
Route::get('components', function ()            { return redirect('components/bootstrap'); });
Route::get('components/bootstrap',              'ComponentsController@bootstrap')->name('components.bootstrap');
Route::get('components/typography',             'ComponentsController@typography')->name('components.typography');
Route::get('components/colors',                 'ComponentsController@colors')->name('components.colors');
Route::get('components/buttons',                'ComponentsController@buttons')->name('components.buttons');
Route::get('components/tabs',                   'ComponentsController@tabs')->name('components.tabs');
Route::get('components/progressbars',           'ComponentsController@progressbars')->name('components.progressbars');
Route::get('components/modals',                 'ComponentsController@modals')->name('components.modals');
Route::get('components/notifications',          'ComponentsController@notifications')->name('components.notifications');
Route::get('components/dialogs',                'ComponentsController@dialogs')->name('components.dialogs');
Route::get('components/listgroup',              'ComponentsController@listgroup')->name('components.listgroup');
Route::get('components/mediaobject',            'ComponentsController@mediaobject')->name('components.mediaobject');
Route::get('components/nestable',               'ComponentsController@nestable')->name('components.nestable');
Route::get('components/rangesliders',           'ComponentsController@rangesliders')->name('components.rangesliders');
Route::get('components/helperclass',            'ComponentsController@helperclass')->name('components.helperclass');

/* Forms  */
Route::get('forms', function ()                 { return redirect('forms/basic'); });
Route::get('forms/basic',                       'FormsController@basic')->name('forms.basic');
Route::get('forms/advanced',                    'FormsController@advanced')->name('forms.advanced');
Route::get('forms/validation',                  'FormsController@validation')->name('forms.validation');
Route::get('forms/wizard',                      'FormsController@wizard')->name('forms.wizard');
Route::get('forms/summernote',                  'FormsController@summernote')->name('forms.summernote');
Route::get('forms/dragdropupload',              'FormsController@dragdropupload')->name('forms.dragdropupload');
Route::get('forms/editors',                     'FormsController@editors')->name('forms.editors');
Route::get('forms/markdown',                    'FormsController@markdown')->name('forms.markdown');
Route::get('forms/cropping',                    'FormsController@cropping')->name('forms.cropping');

/* Table  */
Route::get('tables', function ()                { return redirect('tables/normal'); });
Route::get('tables/normal',                     'TablesController@normal')->name('tables.normal');
Route::get('tables/color',                      'TablesController@color')->name('tables.color');
Route::get('tables/datatable',                  'TablesController@datatable')->name('tables.datatable');
Route::get('tables/editable',                   'TablesController@editable')->name('tables.editable');
Route::get('tables/filter',                     'TablesController@filter')->name('tables.filter');
Route::get('tables/dragger',                    'TablesController@dragger')->name('tables.dragger');

/* Table  */
Route::get('charts', function ()                { return redirect('charts/c3'); });
Route::get('charts/c3',                         'ChartsController@c3')->name('charts.c3');
Route::get('charts/chartjs',                    'ChartsController@chartjs')->name('charts.chartjs');
Route::get('charts/morris',                     'ChartsController@morris')->name('charts.morris');
Route::get('charts/flot',                       'ChartsController@flot')->name('charts.flot');
Route::get('charts/sparkline',                  'ChartsController@sparkline')->name('charts.sparkline');
Route::get('charts/knob',                       'ChartsController@knob')->name('charts.knob');

/* Maps  */
Route::get('maps', function ()                  { return redirect('maps/jvectormap'); });
Route::get('maps/jvectormap',                   'MapsController@jvectormap')->name('maps.jvectormap');

/* Maps  */
Route::get('widget', function ()                { return redirect('widget/widgets'); });
Route::get('widget/widgets',                    'WidgetController@widgets')->name('widget.widgets');

/* Pages  */
Route::get('pages', function ()                 { return redirect('pages/blank'); });
Route::get('pages/blank',                       'PagesController@blank')->name('pages.blank');
Route::get('pages/profile',                     'PagesController@profile')->name('pages.profile');
Route::get('pages/userlist',                    'PagesController@userlist')->name('pages.userlist');
Route::get('pages/testimonials',                'PagesController@testimonials')->name('pages.testimonials');
Route::get('pages/invoices',                    'PagesController@invoices')->name('pages.invoices');
Route::get('pages/invoicedetails',              'PagesController@invoicedetails')->name('pages.invoicedetails');
Route::get('pages/timeline',                    'PagesController@timeline')->name('pages.timeline');
Route::get('pages/searchresults',               'PagesController@searchresults')->name('pages.searchresults');
Route::get('pages/gallery',                     'PagesController@gallery')->name('pages.gallery');
Route::get('pages/pricing',                     'PagesController@pricing')->name('pages.pricing');


/* Authentication  */
Route::get('authentication', function ()        { return redirect('authentication/login'); });
Route::get('authentication/login',              'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/login2',             'AuthenticationController@login2')->name('authentication.login2');
Route::get('authentication/register',           'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgotpassword',     'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
Route::get('authentication/page404',            'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/maintenance',        'AuthenticationController@maintenance')->name('authentication.maintenance');
Route::get('authentication/comingsoon',         'AuthenticationController@comingsoon')->name('authentication.comingsoon');


/* Extra  */
Route::get('extra', function ()                 { return redirect('extra/social'); });
Route::get('extra/social',                      'ExtraController@social')->name('extra.social');
Route::get('extra/news',                        'ExtraController@news')->name('extra.news');

Route::get('extra/settings',                    'ExtraController@settings')->name('extra.settings');

/* Project   */
Route::get('projects', function ()              { return redirect('projects/taskboard'); });
Route::get('projects/taskboard',                'ProjectsController@taskboard')->name('projects.taskboard');
Route::get('projects/projectlist',              'ProjectsController@projectlist')->name('projects.projectlist');
Route::get('projects/addproject',               'ProjectsController@addproject')->name('projects.addproject');
Route::get('projects/ticket',                   'ProjectsController@ticket')->name('projects.ticket');
Route::get('projects/ticketdetails',            'ProjectsController@ticketdetails')->name('projects.ticketdetails');
Route::get('projects/clients',                  'ProjectsController@clients')->name('projects.clients');
Route::get('projects/todo',                     'ProjectsController@todo')->name('projects.todo');

/* HR   */
Route::get('hr', function ()                    { return redirect('hr/hrdashboard'); });
Route::get('hr/hrdashboard',                    'HrController@hrdashboard')->name('hr.hrdashboard');
Route::get('hr/users',                          'HrController@users')->name('hr.users');
Route::get('hr/departments',                    'HrController@departments')->name('hr.departments');
Route::get('hr/employee',                       'HrController@employee')->name('hr.employee');
Route::get('hr/activities',                     'HrController@activities')->name('hr.activities');
Route::get('hr/holidays',                       'HrController@holidays')->name('hr.holidays');
Route::get('hr/events',                         'HrController@events')->name('hr.events');
Route::get('hr/payroll',                        'HrController@payroll')->name('hr.payroll');
Route::get('hr/accounts',                       'HrController@accounts')->name('hr.accounts');
Route::get('hr/report',                         'HrController@report')->name('hr.report');

/* Card   */
Route::get('cardlayout', function ()            { return redirect('cardlayout/cards'); });
Route::get('cardlayout/cards',                  'CardlayoutController@cards')->name('cardlayout.cards');


/* Card   */
Route::get('job', function ()                   { return redirect('job/jobdashboard'); });
Route::get('job/jobdashboard',                  'JobController@jobdashboard')->name('job.jobdashboard');
Route::get('job/positions',                     'JobController@positions')->name('job.positions');
Route::get('job/applicants',                    'JobController@applicants')->name('job.applicants');
Route::get('job/resumes',                       'JobController@resumes')->name('job.resumes');
Route::get('job/jobsettings',                   'JobController@jobsettings')->name('job.jobsettings');


/* Frontend */
Route::get('/frontend', function(){
    return view('frontEnd.index');
});

Auth::routes();

// Route::get('/blog/all', function(){
//     return view('frontEnd.blog.blog_all');
// });

Route::get('/home', 'HomeController@index')->name('home');

/*Business Management*/
Route::get('business/add', 'Admin\BusinessController@addBusiness')->name('business.add');
Route::post('business/store', 'Admin\BusinessController@store')->name('business.store');

Route::get('business/upcoming', 'Admin\BusinessController@upcomingBusiness')->name('business.upcoming');
Route::get('business/active', 'Admin\BusinessController@activeBusiness')->name('business.active');
Route::get('business/reject', 'Admin\BusinessController@rejectBusiness')->name('business.reject');

Route::get('business/edit/{id}', 'Admin\BusinessController@editBusiness')->name('business.edit');
Route::post('business/update', 'Admin\BusinessController@updateBusiness')->name('business.update');
Route::post('business/reject/model/{id}', 'Admin\BusinessController@rejectBusinessModel')->name('business.reject.model');

Route::get('business/view/{id}', 'Admin\BusinessController@viewBusiness')->name('business.view');
Route::get('business/delete/{id}', 'Admin\BusinessController@destroyBusiness')->name('business.delete');
//country_business
//category
// Route::get('/frontend/category', function(){
//     return view('frontEnd.category.category');
// });

Route::get('/contact', function(){
    return view('frontEnd.contact.contact');
});
//category
Route::get('/frontend/membership', function(){
    return view('frontEnd.profile.membership.membership');
});
//category

Route::get('/frontend/bookmark', function(){
    return view('frontEnd.profile.bookmark.bookmark');
});
Route::get('/frontend/add_business', function(){
    return view('frontEnd.profile.business.add_business');
});


Route::get('business/category', 'FrontEndController\CategoryFrontController@index')->name('category.view');
Route::get('category/wise/business/{id}', 'FrontEndController\CategoryFrontController@businesslist')->name('category.business');

Route::get('newsfeed', 'FrontEndController\NewsfeedFrontController@index')->name('newsfeed.view');
Route::get('newsfeed/detail/{id}', 'FrontEndController\NewsfeedFrontController@detail')->name('newsfeed.detail');
Route::get('business/detail/{id}','FrontEndController\BusinessFrontController@detail')->name('business.detail');
 //userrrr
Route::get('User/Account/detail','FrontEndController\UserFrontController@index')->name('user.detail');

Route::post('User/Account/Update/{id}','FrontEndController\UserFrontController@update')->name('user.info');

Route::get('banner/index','Admin\BannerController@index')->name('banner.index');


Route::post('banner/create','Admin\BannerController@create')->name('banner.create');

Route::post('banner/update/{id}','Admin\BannerController@update')->name('banner.edit');

Route::get('banner/delete/{id}','Admin\BannerController@destroy')->name('banner.destroy');

Route::get('event/index','Admin\EventController@index')->name('event.index');

Route::post('event/update/{id}','Admin\EventController@update')->name('event.update');

Route::post('event/create','Admin\EventController@create')->name('event.create');

Route::get('event/delete/{id}','Admin\EventController@destroy')->name('event.destroy');

Route::get('bookmark/','FrontEndController\BookmarkFrontController@index')->name('bookmark.index');

Route::get('event/','FrontEndController\EventFrontController@event')->name('event.index');  

Route::get('event/detail/{id}','FrontEndController\EventFrontController@detail')->name('event.detail');

Route::get('country/wise/business','FrontEndController\CountryFrontController@index')->name('country.bussiness');

Route::post('country/filter','FrontEndController\CountryFrontController@countryfilter')->name('country.filter');

Route::post('/bookmark','FrontEndController\BookmarkFrontController@postbookmark')->name('bookmark.create');

