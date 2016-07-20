<?php
Route::group(['namespace' => 'Party',], function () {
    Route::group(['prefix' => 'branch'], function () {
        Route::get('index', 'BranchController@index')->name('frontend.branch.index');
        Route::get('bind', 'BranchController@show')->name('frontend.branch.bind');
        Route::post('bind', 'BranchController@update')->name('frontend.branch.update');
        Route::get('establish', 'BranchController@create')->name('frontend.branch.establish');
        Route::post('create', 'BranchController@store')->name('frontend.branch.create');
    });

    Route::group(['prefix' => 'course'], function () {
        Route::get('index', 'CourseController@index')->name('frontend.course.index');
        Route::get('submit', 'CourseController@create')->name('frontend.course.create');
        Route::post('submit', 'CourseController@store')->name('frontend.course.store');
    });

    Route::group(['prefix' => 'case'], function () {
//        Route::get('index', 'CaseController@index')->name('frontend.case.index');
        Route::get('submit', 'CaseController@create')->name('frontend.case.create');
        Route::post('submit', 'CaseController@store')->name('frontend.case.store');
    });

    Route::group(['prefix' => 'recommend'], function () {

    });

});