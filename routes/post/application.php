<?php

Route::prefix('/applications')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/add-new-application',             [ 'uses' => 'Post\Application\AddNewApplicationController@post' ]);
    Route::post('/get-application-data',            [ 'uses' => 'Post\Application\GetApplicationDataController@post' ]);

    Route::post('/add-new-subapplication-release',  [ 'uses' => 'Post\Application\AddNewSubApplicationReleaseController@post' ]);
    Route::post('/add-new-subapplication-series',   [ 'uses' => 'Post\Application\AddNewSubApplicationSeriesController@post' ]);

    Route::post('/seve-application-data',   [ 'uses' => 'Post\Application\SaveSubApplicationChangesController@post' ]);




// seve-application-data




});



?>