<?php
Route::group(['namespace' => 'Party', 'middleware' => 'auth'], function () {

    Route::group(['prefix' => 'branch'], function () {
//        Route::post('bind', 'BranchController@update')->name('frontend.branch.update');
        Route::get('establish', 'BranchController@create')->name('frontend.branch.establish');
        Route::post('create', 'BranchController@store')->name('frontend.branch.create');
        Route::post('image', 'BranchController@image')->name('frontend.branch.image');
        Route::post('image/drag', 'BranchController@imageDrag')->name('frontend.branch.image.drag');
        Route::get('edit/{id}', 'BranchController@edit')->name('frontend.branch.edit');
        Route::post('edit/{id}', 'BranchController@update')->name('frontend.branch.update');
        Route::get('get', 'BranchController@get')->name('frontend.branch.get');
    });

    Route::post('comment/{id}', 'CommentController@create')->name('frontend.comment.create');

    Route::group(['middleware' => 'submit'], function () {

        Route::group(['prefix' => 'course'], function () {
            Route::get('submit', 'CourseController@create')->name('frontend.course.create');
            Route::post('image', 'CourseController@image')->name('frontend.course.image');
            Route::post('image/drag', 'CourseController@imageDrag')->name('frontend.course.image.drag');
            Route::get('edit/{id}', 'CourseController@edit')->name('frontend.course.edit');
            Route::post('submit', 'CourseController@store')->name('frontend.course.store');
            Route::post('edit/{id}', 'CourseController@update')->name('frontend.course.update');
            Route::get('course/verify', 'CourseController@uploadVerify')->name('frontend.course.upload.verify');
        });

        Route::group(['prefix' => 'case'], function () {
            Route::get('submit', 'CaseController@create')->name('frontend.case.create');
            Route::get('edit/{id}', 'CaseController@edit')->name('frontend.case.edit');
            Route::get('edit/{id}', 'CaseController@edit')->name('frontend.case.edit');
            Route::post('submit', 'CaseController@store')->name('frontend.case.store');
            Route::post('image', 'CaseController@image')->name('frontend.case.image');
            Route::post('image/drag', 'CaseController@imageDrag')->name('frontend.case.image.drag');
            Route::post('edit/{id}', 'CaseController@update')->name('frontend.case.update');
        });

        Route::group(['prefix' => 'recommend'], function () {
            Route::get('submit', 'RecommendController@create')->name('frontend.recommend.create');
            Route::get('edit/{id}', 'RecommendController@edit')->name('frontend.recommend.edit');
            Route::post('submit', 'RecommendController@store')->name('frontend.recommend.store');
            Route::post('image', 'RecommendController@image')->name('frontend.recommend.image');
            Route::post('image/drag', 'RecommendController@imageDrag')->name('frontend.recommend.image.drag');
            Route::post('edit/{id}', 'RecommendController@update')->name('frontend.recommend.update');
            Route::post('recommend/video/upload', 'RecommendController@upload')->name('frontend.recommend.upload');
        });
    });

});