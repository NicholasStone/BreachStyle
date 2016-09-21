<?php
Route::group([
    'namespace' => 'Verification',
    'prefix'    => 'verify',
], function () {

    /**
     * 创建党支部资料审核
     */
    Route::get('branch', 'BranchController@index')->name('admin.verify.branch');
    Route::get('branch/get/{v}', 'BranchController@gets')->name('admin.verify.branch.get');
//    branch 分类检索
    Route::get('branch/search', 'BranchController@search')->name('admin.verify.branch.search');
    Route::get('branch/grant/{id}', 'BranchController@grant')->name('admin.verify.branch.grant');
    Route::get('branch/deny/{id}', 'BranchController@deny')->name('admin.verify.branch.deny');
    Route::get('branch/delete/{id}', 'BranchController@delete')->name('admin.verify.branch.delete');
    Route::get('branch/restore/{id}', 'BranchController@restore')->name('admin.verify.branch.restore');
    Route::get('branch/detail/{id}', 'BranchController@detail')->name('admin.verify.branch.detail');
    Route::get('branch/excel', 'BranchController@excel')->name('admin.verify.branch.excel');
    /**
     * 成果展示审核
     */
    Route::get('application', 'ApplicationController@index')->name('admin.verify.application');
//    Route::post('application/get/{v}', 'ApplicationController@unhandled')->name('admin.verify.application.get');
    Route::any('application/get/{v}', 'ApplicationController@gets')->name('admin.verify.application.get');

//    审核页面搜索路由
    Route::get(
        'application/search',
        'ApplicationController@search')
        ->name('admin.verify.application.search');

    Route::get('application/grant/{id}', 'ApplicationController@grant')->name('admin.verify.application.grant');
    Route::get('application/deny/{id}', 'ApplicationController@deny')->name('admin.verify.application.deny');
    Route::get('application/delete/{id}', 'ApplicationController@delete')->name('admin.verify.application.delete');
    Route::get('application/restore/{id}', 'ApplicationController@restore')->name('admin.verify.application.restore');
    Route::get('application/detail/{id}', 'ApplicationController@detail')->name('admin.verify.application.detail');
    Route::get('application/excel', 'ApplicationController@excel')->name('admin.verify.application.excel');
});