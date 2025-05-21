<?php

Route::prefix('/layout')->middleware( [ 'web' ] )->group(function ($router) {

    Route::post('/save-key-point-list',     [ 'uses' => 'Post\Layout\SaveKayPointsListController@post' ]);
    Route::post('/save-category-list',      [ 'uses' => 'Post\Layout\SaveCategoryListController@post' ]);
    Route::post('/add-new-category',        [ 'uses' => 'Post\Layout\AddNewCategoryController@post' ]);
    Route::post('/remove-category',         [ 'uses' => 'Post\Layout\RemoveCategoryController@post' ]);
    Route::post('/add-new-event',           [ 'uses' => 'Post\Layout\AddNewEventController@post' ]);
    Route::post('/remove-event',            [ 'uses' => 'Post\Layout\RemoveEventController@post' ]);
    Route::post('/save-event-list',         [ 'uses' => 'Post\Layout\SaveEventListController@post' ]);
    Route::post('/save-grid-event-list',    [ 'uses' => 'Post\Layout\SaveGridEventsListController@post' ]);

    Route::post('/remove-grid-event',       [ 'uses' => 'Post\Layout\RemoveGridEventController@post' ]);
    Route::post('/add-new-grid-event',      [ 'uses' => 'Post\Layout\AddNewGridEventController@post' ]);

    Route::post('/set-grid-events-day-list-after-cutting',    [ 'uses' => 'Post\Layout\SetGridEventsDayListAfterCuttingController@post' ]);



    



});



?>