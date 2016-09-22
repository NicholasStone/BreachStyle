<?php
Route::group(['namespace' => 'Auth'], function (){
    //单点登录
    Route::get('sso/token', 'SSOAuthController@ssoToken')->name('sso.token');
    Route::get('sso/login','SSOAuthController@ssoAuth')->name('sso.oss-login');
    Route::get('fill', 'SSOAuthController@binding')->name('sso.fill');
    Route::post('complete', 'SSOAuthController@complete')->name('sso.complete');
    Route::get('universities', 'SSOAuthController@getUniversity')->name('sso.universities');
});