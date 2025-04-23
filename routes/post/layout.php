<?php

Route::prefix('/layout')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/save-key-point-list', [ 'uses' => 'Post\Layout\SaveKayPointsListController@post' ]);
    Route::post('/save-category-list', [ 'uses' => 'Post\Layout\SaveCategoryListController@post' ]);

    

});



?>