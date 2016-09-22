<?php
Route::group(['namespace' => 'User', 'middleware'=>'auth','prefix'=>'notify'],function (){
    Route::get('read/{id}','NotifyController@read')->name('frontend.notify.read');
    Route::get('unread/{id}','NotifyController@unread')->name('frontend.notify.unread');
});