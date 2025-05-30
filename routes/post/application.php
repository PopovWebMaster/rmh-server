<?php

Route::prefix('/applications')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/add-new-application',             [ 'uses' => 'Post\Application\AddNewApplicationController@post' ]);
    Route::post('/get-application-data',            [ 'uses' => 'Post\Application\GetApplicationDataController@post' ]);
    Route::post('/seve-application-data',           [ 'uses' => 'Post\Application\SaveApplicationDataController@post' ]);
    Route::post('/remove-application',              [ 'uses' => 'Post\Application\RemoveApplicationController@post' ]);
    Route::post('/add-new-application-series',      [ 'uses' => 'Post\Application\AddNewApplicationSeriesController@post' ]);
    Route::post('/add-new-application-release',     [ 'uses' => 'Post\Application\AddNewApplicationReleaseController@post' ]);


    


});



?>