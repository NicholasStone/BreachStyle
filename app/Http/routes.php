<?php
//Auth::loginUsingId(1);
Route::any('/lab/upload', 'Frontend\LabController@upload');

Route::group(['middleware' => 'web'], function () {
    /**
     * Switch between the included languages
     */
//    Route::group(['namespace' => 'Language'], function () {
//        require(__DIR__ . '/Routes/Language/Language.php');
//    });

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
    Route::group(['namespace' => 'Frontend'], function () {
        require(__DIR__ . '/Routes/Frontend/Frontend.php');
        require(__DIR__ . '/Routes/Frontend/Lab.php');
        require(__DIR__ . '/Routes/Frontend/Access.php');
        require(__DIR__ . '/Routes/Frontend/Party.php');
        require(__DIR__ . '/Routes/Frontend/SSOAuth.php');
        require(__DIR__ . '/Routes/Frontend/Notify.php');
        require(__DIR__ . '/Routes/Frontend/Mobile.php');
    });
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    require(__DIR__ . '/Routes/Backend/Dashboard.php');
    require(__DIR__ . '/Routes/Backend/Comments.php');
    require(__DIR__ . '/Routes/Backend/Access.php');
    require(__DIR__ . '/Routes/Backend/LogViewer.php');
    require(__DIR__ . '/Routes/Backend/Verification.php');
    require(__DIR__ . '/Routes/Backend/Settings.php');
});

Route::group(['namespace' => 'Common', 'prefix'=>'common', 'middleware'=>'web'], function (){
    require (__DIR__.'/Routes/Common/Universities.php');
});