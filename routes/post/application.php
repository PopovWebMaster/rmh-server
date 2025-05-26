<?php

Route::prefix('/applications')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/add-new-application', [ 'uses' => 'Post\Application\AddNewApplicationController@post' ]);




    



});



?>