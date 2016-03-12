<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');

Route::get('/new-detail', function () {
    return view('frontend/new-detail');
});

Route::get('/company/profile', function () {
    return view('frontend/employer/profile');
});

Route::get('/company/capacity-profile', function () {
    return view('frontend/employer/capacity-profile');
});

Route::get('/person/resume-mng', function () {
    return view('frontend/employee/resume-mng');
});

Route::get('/person/edit-resume-detail', function () {
    return view('frontend/employee/edit-resume-detail');
});

Route::get('/person/show-resume-detail', function () {
    return view('frontend/employee/show-resume-detail');
});

Route::get('/person/notework', function () {
    return view('frontend/employee/notework');
});

Route::get('/person/send-resume', function () {
    return view('frontend/employee/send-resume');
});

Route::get('/person/account', function () {
    return view('frontend/employee/account');
});

Route::get('/company-team', function () {
    return view('frontend/company-team');
});

Route::get('/company/news-mng', function () {
    return view('frontend/employer/news-mng');
});

Route::get('/company/news-create', function () {
    return view('frontend/employer/news-create');
});

Route::get('/company/cv-mng', function () {
    return view('frontend/employer/cv-mng');
});

Route::get('/company/note-cv-mng', function () {
    return view('frontend/employer/note-cv-mng');
});

Route::get('/company/find-cv', function () {
    return view('frontend/employer/find-cv');
});

Route::get('/company/preview-news', function () {
    return view('frontend/employer/preview-news');
});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    //Dat cac route can dang nhap moi vao duoc o day
//    Route::group(['namespace' => 'User'], function() {
//        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
//        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
//        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
//    });
});