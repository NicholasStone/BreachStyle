<?php
Route::group([
    'namespace' => 'Verification',
    'prefix'    => 'verify',
], function () {

    /**
     * 个人资料审核
     */
    Route::get('personal', 'PersonalController@index')->name('admin.verify.personal');
//    Route::post('personal/get', 'PersonalController@unhandled')->name('admin.verify.personal.get');
    Route::any('personal/get', 'PersonalController@unhandled')->name('admin.verify.personal.get');
    Route::get('personal/grant/{id}', 'PersonalController@grant')->name('admin.verify.personal.grant');
    Route::get('personal/deny/{id}', 'PersonalController@deny')->name('admin.verify.personal.deny');
    Route::get('personal/detail/{id}', 'PersonalController@detail')->name('admin.verify.personal.detail');

    /**
     * 创建党支部资料审核
     */
    Route::get('branch', 'BranchController@index')->name('admin.verify.branch');
//    Route::post('branch/get', 'BranchController@unhandled')->name('admin.verify.branch.get');
    Route::any('branch/get', 'BranchController@unhandled')->name('admin.verify.branch.get');
    Route::get('branch/grant/{id}', 'BranchController@grant')->name('admin.verify.branch.grant');
    Route::get('branch/deny/{id}', 'BranchController@deny')->name('admin.verify.branch.deny');
    Route::get('branch/detail/{id}', 'BranchController@detail')->name('admin.verify.branch.detail');
    /**
     * 成果展示审核
     */
    Route::get('application', 'ApplicationController@index')->name('admin.verify.application');
//    Route::post('application/get', 'ApplicationController@unhandled')->name('admin.verify.application.get');
    Route::any('application/get', 'ApplicationController@unhandled')->name('admin.verify.application.get');
    Route::get('application/grant/{id}', 'ApplicationController@grant')->name('admin.verify.application.grant');
    Route::get('application/deny/{id}', 'ApplicationController@deny')->name('admin.verify.application.deny');
    Route::get('application/detail/{id}', 'ApplicationController@detail')->name('admin.verify.application.detail');

});