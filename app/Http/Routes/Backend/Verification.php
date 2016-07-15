<?php
Route::group([
    'namespace' => 'Verification',
    'prefix'    => 'verify',
], function () {

    /**
     * 个人资料审核
     */
    Route::get('personal', 'PersonalController@index')->name('admin.verify.personal');
    Route::get('personal/get', 'PersonalController@getInfoNeedToVerified')->name('admin.verify.personal.get');
    Route::get('personal/{id}', 'PersonalController@passVerify')->name('admin.verify.personal.pass');

    /**
     * 成果展示审核
     */
    Route::get('application', 'ApplicationController@index')->name('admin.verify.application');
    Route::get('application/get', 'ApplicationController@getInfoNeedToVerified')->name('admin.verify.application.get');
    Route::get('application/{id}', 'ApplicationController@passVerify')->name('admin.verify.application.pass');
});