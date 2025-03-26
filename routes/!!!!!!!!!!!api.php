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



// Route::group([
    
//     'prefix' => '/proba',
// ], function ($router) {

//     Route::apiResource('/{locale}','GetFilesController');
// });





Route::group([

    'prefix' => '/download-34gYjh5peRts67Lm/{expansion}/{side}/{folderHash}',


], function ($router) {
    Route::apiResource('/','ApiDpwnloadPdfController'); 

});

Route::group([
    'prefix' => '/download-file/{side}/{fileType}/{folderNameHash}',

], function ($router) {

    Route::apiResource('/','ApiDownloadFilesController'); 
});











// Route::group([

//     'prefix' => '/download-34gYjh5peRts67Lm/{expansion}/{side}/{folderHash}',

// ], function ($router) {
//     Route::apiResource('/','ApiDpwnloadPdfController'); 
// });


// Route::group([
//     'prefix' => '/',

// ], function ($router) {
//     Route::apiResource('/download-34gYjh5peRts67Lm/{expansion}/{side}/{folderHash}','ApiDpwnloadPdfController'); 
//     Route::apiResource('/download-file/{side}/{fileType}/{folderNameHash}','ApiDownloadFilesController'); 
// });






Route::group([
    'middleware' => [ 'api' ],
    'prefix' => '/{locale}',
], function ($router) {
    
    Route::apiResource('/','ApiController'); 


    if( !config( 'app.APP_IS_PRODUCTION' ) ){
        Route::apiResource('/admin','Admin\DevDataController');
        Route::apiResource('/admin/printing-office','Admin\Api_PrintingOffice_Controller');
        Route::apiResource('/admin/clients','Admin\Api_Clients_Controller');
        Route::apiResource('/admin/contacts','Admin\Api_Contacts_Controller');
        Route::apiResource('/admin/user-projects','Admin\Api_UserProjects_Controller');

    };

    Route::apiResource('/integration','ApiIntegrationController');

    Route::apiResource('/accept-payment-e2xzg98ks45fsd','AcceptPaymentController'); 


    Route::apiResource('/accept-payment-fondy-hhfd29','AcceptPaymentFondyController'); 


    Route::apiResource('/get-files','GetFilesController'); 


    // Route::apiResource('/download/png/0/d','ApiDpwnloadPdfController'); 



});





//!!!!!!!!!!!!!!!!!!!!!!!!!!
// Route::group([
//     'middleware' => ['api' ],
//     'prefix' => '/{locale}/admin',
// ], function ($router) {
    
//     Route::apiResource('/','Admin\DewelopmentDataController');

// });

