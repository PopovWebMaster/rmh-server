<?php

Route::prefix('/layout')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/save-key-point-list', [ 'uses' => 'Post\Layout\SaveKayPointsListController@post' ]);
    Route::post('/save-category-list', [ 'uses' => 'Post\Layout\SaveCategoryListController@post' ]);


    Route::post('/add-new-category', [ 'uses' => 'Post\Layout\AddNewCategoryController@post' ]);
    Route::post('/remove-category', [ 'uses' => 'Post\Layout\RemoveCategoryController@post' ]);

    

});



?>