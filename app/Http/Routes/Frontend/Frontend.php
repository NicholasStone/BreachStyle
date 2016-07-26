<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('macros', 'FrontendController@macros')->name('frontend.macros');
Route::post('active', 'ActiveController@indexUniversityActive')->name('frontend.active');
Route::get('active/detail', 'ActiveController@activeDetail')->name('frontend.active.detail');
Route::post('active/province', 'ActiveController@provinceActive')->name('frontend.active.province');
Route::group(['namespace' => 'Party'],function (){
    Route::get('branch/index', 'BranchController@index')->name('frontend.branch.index');
    Route::get('branch/detail/{id}', 'BranchController@index')->name('frontend.branch.show');

    Route::get('course/index', 'CourseController@index')->name('frontend.course.list');
    Route::get('course/detail/{id}', 'CourseController@show')->name('frontend.course.show');

    Route::get('case/index', 'CaseController@index')->name('frontend.case.list');
    Route::get('case/detail/{id}', 'CaseController@show')->name('frontend.case.show');

    Route::get('recommend/{type}/index', 'RecommendController@index')->name('frontend.recommend.list');
    Route::get('recommend/detail/show', 'RecommendController@show')->name('frontend.recommend.show');

    Route::get('search/{sort?}', "SearchController@search")->name('frontend.search');
});

/**
 * These frontend controllers require the user to be logged in
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
//        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
//        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::get('profile', 'ProfileController@show')->name('frontend.user.profile.detail');
        Route::post('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
        Route::post('profile/join', 'ProfileController@join')->name('frontend.user.profile.join');
    });
});