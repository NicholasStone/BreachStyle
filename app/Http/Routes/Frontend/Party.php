<?php
Route::group(['namespace' => 'Party', 'middleware' => 'auth'], function () {
    Route::get('fancy/{id}', 'FancyController@fancy')->name('frontend.fancy');

    Route::group(['prefix' => 'branch'], function () {
//        Route::get('bind', 'BranchController@show')->name('frontend.branch.bind');
        Route::post('bind', 'BranchController@update')->name('frontend.branch.update');
        Route::get('establish', 'BranchController@create')->name('frontend.branch.establish');
        Route::post('create', 'BranchController@store')->name('frontend.branch.create');
        Route::get('get', 'BranchController@get')->name('frontend.branch.get');
    });

    Route::post('comment/{id}', 'CommentController@create')->name('frontend.comment.create');

    Route::group(['middleware' => 'submit'], function () {

        Route::group(['prefix' => 'course'], function () {
            Route::get('submit', 'CourseController@create')->name('frontend.course.create');
            Route::get('edit/{id}', 'CourseController@edit')->name('frontend.course.edit');
            Route::post('submit', 'CourseController@store')->name('frontend.course.store');
            Route::post('edit/{id}', 'CourseController@update')->name('frontend.course.update');
            Route::post('course/video/upload', 'CourseController@upload')->name('frontend.course.upload');
        });

        Route::group(['prefix' => 'case'], function () {
            Route::get('submit', 'CaseController@create')->name('frontend.case.create');
            Route::get('edit/{id}', 'CaseController@edit')->name('frontend.case.edit');
            Route::post('submit', 'CaseController@store')->name('frontend.case.store');
            Route::post('edit/{id}', 'CaseController@update')->name('frontend.case.update');
        });

        Route::group(['prefix' => 'recommend'], function () {
            Route::get('submit', 'RecommendController@create')->name('frontend.recommend.create');
            Route::get('edit/{id}', 'RecommendController@edit')->name('frontend.recommend.edit');
            Route::post('submit', 'RecommendController@store')->name('frontend.recommend.store');
            Route::post('edit/{id}', 'RecommendController@update')->name('frontend.recommend.update');
            Route::post('recommend/video/upload', 'RecommendController@upload')->name('frontend.recommend.upload');
        });
    });

});