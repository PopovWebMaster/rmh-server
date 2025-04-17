<?php

Route::prefix('/layout')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/save-key-point-list', [ 'uses' => 'Post\Layout\SaveKayPointsListController@post' ]);




    

});



?>