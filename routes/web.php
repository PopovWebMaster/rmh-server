<?php


Route::get('/login', [ 'uses' => 'Get\LoginController@get' ])->name('login');

Route::prefix('/')->middleware( [ 'web' ] )->group(function ($router) {

    Route::get('/', [ 'uses' => 'Get\HomeController@get' ])->name('home');
    Route::get('/admin', [ 'uses' => 'Get\AdminController@get' ])->name('admin');
    Route::get('/logs', [ 'uses' => 'Get\LogsController@get' ])->name('logs');
    Route::get('/applications', [ 'uses' => 'Get\AplicationsController@get' ])->name('applications');



    Route::post('/test-post-request',[ 'uses' => 'Post\TestPostController@post' ]);
    // Route::get('/admin/{page?}',[ 'uses' => 'Admin\AdminHomeController@redirectHome' ]);



});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
