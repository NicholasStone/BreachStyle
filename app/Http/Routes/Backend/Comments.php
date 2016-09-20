<?php

Route::group([
    'namespace' => 'Verification',
], function (){
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-users',
    ],function (){
        Route::get('comments/index', 'CommentController@index')->name('admin.comments.index');
        Route::get('comments/get', 'CommentController@get')->name('admin.comments.get');
    });
});