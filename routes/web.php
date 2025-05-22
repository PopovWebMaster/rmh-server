<?php


Route::get('/login', [ 'uses' => 'Get\LoginController@get' ])->name('login');
Route::get('/logout', [ 'uses' => 'Get\LogoutController@get' ])->name('logout');


Route::prefix('/')->middleware( [ 'web' ] )->group(function ($router) {

    Route::get('/', [ 'uses' => 'Get\HomeController@get' ])->name('home');
    Route::get('/admin', [ 'uses' => 'Get\AdminController@get' ])->name('admin');

    Route::prefix('/{company?}')->group(function ($router) {

        Route::get('/main',         [ 'uses' => 'Get\MainController@get' ])->name('main');
        Route::get('/schedule',     [ 'uses' => 'Get\ScheduleController@get' ])->name('schedule');
        Route::get('/play-report',  [ 'uses' => 'Get\PlayReportController@get' ])->name('play_report');
        Route::get('/logs',         [ 'uses' => 'Get\LogsController@get' ])->name('logs');
        Route::get('/applications', [ 'uses' => 'Get\ApplicationsController@get' ])->name('applications');
        Route::get('/layout',       [ 'uses' => 'Get\LayoutController@get' ])->name('layout');



    });

    Route::post('/login-by-post',       [ 'uses' => 'Post\Login\LoginByPostController@post' ]);
    Route::post('logs/add-play-report', [ 'uses' => 'Post\Logs\AddPlayReportController@post' ]);


    Route::post('play-report/get-one-day-entire-list', [ 'uses' => 'Post\PlayReport\GetOneDayPlayReportListController@post' ]);
    Route::post('play-report/get-entier-list-for-search-value', [ 'uses' => 'Post\PlayReport\GetEntierListForSearchValueController@post' ]);


});

   




    
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
