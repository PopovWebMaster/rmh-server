<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => [ 'api' ],
    'prefix' => '/',
], function ($router) {
    
    if( !config( 'app.APP_IS_PRODUCTION' ) ){
        Route::apiResource('/','Api\ApiGetAnyDevelopmentRequests'); 
    };



    // Route::apiResource('/download/png/0/d','ApiDpwnloadPdfController'); 



});
