<?php

Route::prefix('/get-starting-data')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/home',                [ 'uses' => 'Post\GetStartingData\GetStartingDataHomeController@post' ]);
    Route::post('/login',               [ 'uses' => 'Post\GetStartingData\GetStartingDataLoginController@post' ]);
    Route::post('/main',                [ 'uses' => 'Post\GetStartingData\GetStartingDataMainController@post' ]);
    Route::post('/schedule',            [ 'uses' => 'Post\GetStartingData\GetStartingDataScheduleController@post' ]);
    Route::post('/play-report',         [ 'uses' => 'Post\GetStartingData\GetStartingDataPlayReportController@post' ]);
    Route::post('/logs',                [ 'uses' => 'Post\GetStartingData\GetStartingDataLogsController@post' ]);
    Route::post('/access-is-closed',    [ 'uses' => 'Post\GetStartingData\GetStartingDataAccessIsClosedController@post' ]);
    Route::post('/layout',              [ 'uses' => 'Post\GetStartingData\GetStartingDataLayoutController@post' ]);



    

});



?>