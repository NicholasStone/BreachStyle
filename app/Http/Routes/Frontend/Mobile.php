<?php
Route::group(['prefix' => 'm'], function () {
    Route::get('/', 'FrontendController@index_m')->name('frontend.m.index');

    Route::group(['namespace' => 'Party'], function () {
        Route::get('branches', 'BranchController@index_m')->name('frontend.m.branch.index');
        Route::get('branches/detail/{id}', 'BranchController@show_m')->name('frontend.m.branch.show');

        Route::get('cases', 'CaseController@index_m')->name('frontend.m.case');
        Route::get('courses', 'CourseController@index_m')->name('frontend.m.course');
        Route::get('recommends', 'RecommendController@index_m')->name('frontend.m.recommend');
    });
});