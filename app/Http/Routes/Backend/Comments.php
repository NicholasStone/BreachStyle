<?php

Route::group([
    'namespace' => 'Verification',
], function (){
    Route::group([
        'middleware' => 'access.routeNeedsPermission:manage-users',
    ],function (){
        Route::get('comments', 'CommentController@index')->name('admin.verify.comments.index');
        Route::get('comments/get', 'CommentController@get')->name('admin.verify.comments.get');
        Route::get('comments/deny/{id}', 'CommentController@deny')->name('admin.verify.comments.deny');
    });
});