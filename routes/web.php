<?php


Route::get('/login', [ 'uses' => 'Get\LoginController@get' ])->name('login');

Route::prefix('/')->middleware( [ 'web' ] )->group(function ($router) {

    Route::get('/', [ 'uses' => 'Get\HomeController@get' ])->name('home');
    Route::get('/admin', [ 'uses' => 'Get\AdminController@get' ])->name('admin');



    Route::prefix('/{company?}')->group(function ($router) {

        Route::get('/main', [ 'uses' => 'Get\MainController@get' ])->name('main');
        Route::get('/schedule', [ 'uses' => 'Get\ScheduleController@get' ])->name('schedule');
        Route::get('/play-report', [ 'uses' => 'Get\PlayReportController@get' ])->name('play_report');
        Route::get('/logs', [ 'uses' => 'Get\LogsController@get' ])->name('logs');
        Route::get('/applications', [ 'uses' => 'Get\AplicationsController@get' ])->name('applications');


        
        // play-report

    });

    Route::post('/get-starting-data/home',          [ 'uses' => 'Post\GetStartingData\GetStartingDataHomeController@post' ]);
    Route::post('/get-starting-data/login',         [ 'uses' => 'Post\GetStartingData\GetStartingDataLoginController@post' ]);
    
    Route::post('/get-starting-data/main',          [ 'uses' => 'Post\GetStartingData\GetStartingDataMainController@post' ]);
    Route::post('/get-starting-data/schedule',      [ 'uses' => 'Post\GetStartingData\GetStartingDataScheduleController@post' ]);
    Route::post('/get-starting-data/play-report',   [ 'uses' => 'Post\GetStartingData\GetStartingDataPlayReportController@post' ]);
    Route::post('/get-starting-data/logs',          [ 'uses' => 'Post\GetStartingData\GetStartingDataLogsController@post' ]);
    
    
    Route::post('/login-by-post',[ 'uses' => 'Post\Login\LoginByPostController@post' ]);
    


});

   




    
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
