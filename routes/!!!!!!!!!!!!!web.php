<?php


Route::get('/', [ 'uses' => 'Page\HomeWithoutLocaleController@get' ])->middleware(['add_printing_office'])->name('home_without_locale');
Route::get('/start-go', ['uses' => 'StartGo@index']);
Route::get('/integration-dev', ['uses' => 'Page\IntegrationDevelopmentController@get']);

Route::prefix('/{locale}')->middleware( [ 
    // 'add_guestId_to_cookie', 
    'add_locale_to_cookie', 
    'check_locale' 
])->group(function ($router) {

    Route::get('/test-ip', [ 'uses' => 'Page\TestIpController@get' ]);
    Route::get('/admin', [ 'uses' => 'Admin\AdminHomeController@get' ])->name('admin');
    Route::get('/admin/{page?}',[ 'uses' => 'Admin\AdminHomeController@redirectHome' ]);
    Route::post('/admin',[ 'uses' => 'Admin\AdminHomeController@post' ]);
    Route::post('/admin/{page?}',[ 'uses' => 'Admin\AdminHomeController@post' ]);
    Route::get('/',                     [ 'uses' => 'Page\HomeController@get' ])->name('home');
    Route::get('/create',               [ 'uses' => 'Page\CreateController@get' ])->name('create');
    Route::get('/layout-sheet',                     [ 'uses' => 'Page\SheetController@get' ])->name('layout_sheet');
    Route::get('/layout-sheet/my-uploaded-files',   [ 'uses' => 'Page\SheetController@get' ]);
    Route::get('/layout-sheet/finished-sheets',     [ 'uses' => 'Page\SheetController@get' ]);
    Route::get('/layout-sheet/create-a-sheet',      [ 'uses' => 'Page\SheetController@get' ]);
    Route::get('/editor',               [ 'uses' => 'Page\EditorController@get' ])->name('editor');
    Route::get('/editor/{id_project?}', [ 'uses' => 'Page\EditorController@get']);
    Route::get('/templates',                                        [ 'uses' => 'Page\TemplatesController@get' ])->name('templates');
    Route::get('/templates/{part}/{formatAlias}/{categoryAlias}',   [ 'uses' => 'Page\TemplatesController@getByParams' ])->name('templates_by_params');
    Route::get('/template',                 [ 'uses' => 'Page\TemplateController@get' ])->name('template');
    Route::get('/template/{templateAlias}', [ 'uses' => 'Page\TemplateController@getByParams' ])->name('template_by_params');
    Route::get('/my-files',                 [ 'uses' => 'Page\MyFilesController@getFiles' ])->name('my_files');
    Route::get('/my-files/{fileFolder}',    [ 'uses' => 'Page\MyFilesController@getFile' ])->name('my_file');
    Route::get('/login',            [ 'uses' => 'Page\LoginController@get' ])->name('login');
    Route::post('/login',           [ 'uses' => 'Page\LoginController@post']);
    Route::get('/logout',           [ 'uses' => 'Page\LoginController@logout' ])->name('logout');
    Route::post('/logout',          [ 'uses' => 'Page\LoginController@logout' ]);
    Route::get('/registration',     [ 'uses' => 'Page\RegistrationController@get' ])->name('registration');
    Route::post('/registration',    [ 'uses' => 'Page\RegistrationController@post' ]);
    Route::get('/product-download', [ 'uses' => 'Page\ProductDownloadController@getRedirect' ]);
    Route::get('/product-download/{productFolder}', [ 'uses' => 'Page\ProductDownloadController@get' ])->name('product_download');
    Route::get('/integration-docs',              [ 'uses' => 'Page\IntegrationFrameDocsController@get' ])->name('integration_frame_docs');
    Route::get('/integration-docs/{version}',    [ 'uses' => 'Page\IntegrationFrameDocsController@getByParams' ])->name('integration_frame_docs_by_params');
    Route::get('/contacts',         [ 'uses' => 'Page\ContactsController@get' ])->name('contacts');
    Route::get('/contacts/{type}',                 [ 'uses' => 'Page\ContactsController@getByParams' ])->name('contacts_by_params');
    Route::get('/contacts/{type}/{folderName}',   [ 'uses' => 'Page\ContactsController@getByParamsFolder' ])->name('contacts_by_params_folder');

    Route::get('/ifo_fasdfsfdsfdsa', [ 'uses' => 'InfoController@get' ]);
    Route::get('/confirm-email',        [ 'uses' => 'Page\ConfirmEmailController@redirect' ]);
    Route::get('/confirm-email/{token}',[ 'uses' => 'Page\ConfirmEmailController@get' ])->name('confirm_email');
    Route::get('/reset-password',   [ 'uses' => 'Page\ResetPasswordController@get' ])->name('reset_password');

    Route::get('/printing-office-orders',   [ 'uses' => 'Page\PrintingOfficeOrdersController@get' ])->name('printing_office_orders');


    // Route::get('/printing-office-orders',               [ 'uses' => 'Page\PrintingOfficeOrdersController@get' ])->name('printing_office_orders');
    // Route::get('/printing-office-orders/links',         [ 'uses' => 'Page\PrintingOfficeOrdersController@getLinks' ])->name('printing_office_orders_links');
    // Route::get('/printing-office-orders/order',         [ 'uses' => 'Page\PrintingOfficeOrdersController@getOrder' ])->name('printing_office_orders_order');
    // Route::get('/printing-office-orders/order/{hash}',  [ 'uses' => 'Page\PrintingOfficeOrdersController@getOrderHash' ])->name('printing_office_orders_order_hash');



    Route::post('/reset-password',  [ 'uses' => 'Page\ResetPasswordController@post']);
    Route::post('/get-starting-data-home',              [ 'uses' => 'Post\GetStartingDataForHomeController@post' ]);
    Route::post('/get-starting-data-main',              [ 'uses' => 'Post\GetStartingDataForMainController@post' ]);
    Route::post('/get-starting-data-login',             [ 'uses' => 'Post\GetStartingDataForLoginController@post' ]);
    Route::post('/get-starting-data-registration',      [ 'uses' => 'Post\GetStartingDataForRegistrationController@post' ]);
    Route::post('/get-starting-data-reset-password',    [ 'uses' => 'Post\GetStartingDataForResetPasswordController@post' ]);
    Route::post('/get-starting-data-create',            [ 'uses' => 'Post\GetStartingDataForCreateController@post' ]);
    Route::post('/get-starting-data-contacts',          [ 'uses' => 'Post\GetStartingDataForContactsController@post' ]);
    Route::post('/get-starting-data-layout-sheet',      [ 'uses' => 'Post\GetStartingDataForLayoutSheetController@post' ]);
    Route::post('/get-starting-data-editor',            [ 'uses' => 'Post\GetStartingDataForEditorController@post' ]);
    Route::post('/get-starting-data-editor-initial-state',  [ 'uses' => 'Post\GetStartingDataForEditor_InitialState_Controller@post' ]);
    Route::post('/get-starting-data-editor-user-projects',  [ 'uses' => 'Post\GetStartingDataForEditor_UserProjects_Controller@post' ]);
    Route::post('/get-starting-data-template',          [ 'uses' => 'Post\GetStartingDataForTemplateController@post' ]);
    Route::post('/get-starting-data-templates',         [ 'uses' => 'Post\GetStartingDataForTemplatesController@post' ]);
    Route::post('/get-starting-data-my-file',           [ 'uses' => 'Post\GetStartingDataForMyFileController@post' ]);
    Route::post('/get-one-template-info',               [ 'uses' => 'Post\GetOneTemplateInfoController@post' ]);
    Route::post('/get-starting-data-pay',               [ 'uses' => 'Post\GetStartingDataForPayController@post' ]);
    Route::post('/download-image',                      [ 'uses' => 'Post\DownloadImageController@post'] );
    Route::post('/download-preview',                    [ 'uses' => 'Post\DownloadPreviewController@post'] );
    Route::post('/get-projects',                        [ 'uses' => 'Post\GetProjectsController@post'] );
    Route::post('/save-projects',                       [ 'uses' => 'Post\SaveProjectController@post'] );
    Route::post('/save-projects-integration',           [ 'uses' => 'Post\SaveProjectIntegrationController@post'] );
    Route::post('/save-templates-group',                [ 'uses' => 'Post\SaveTemplateGroupController@post'] );
    Route::post('/remove-projects',                     [ 'uses' => 'Post\RemoveProjectController@post'] );
    Route::post('/set-new-project',                     [ 'uses' => 'Post\SetNewProjectController@post'] );
    Route::post('/set-new-project-template',            [ 'uses' => 'Post\SetNewTemplateController@post'] );
    Route::post('/get-one-template',                    [ 'uses' => 'Post\GetOneTemplateController@post'] );
    Route::post('/get-alias-list',                      [ 'uses' => 'Post\GetAliasListController@post' ]);
    Route::post('/get-templates',                       [ 'uses' => 'Post\GetTemplatesController@post' ]);
    // Route::post('/product-buffer',                      [ 'uses' => 'Post\ProductBufferController@post' ]);
    Route::post('/build-product',                       [ 'uses' => 'Post\BuildProductController@post' ]);
    Route::post('/get-free-base64',                     [ 'uses' => 'Post\GetFreeBase64Controller@post' ]);
    Route::post('/get-payed-base64-list',               [ 'uses' => 'Post\GetPayedBase64ListController@post' ]);
    Route::post('/get-payed-base64-file',               [ 'uses' => 'Post\GetPayedBase64FileController@post' ]);
    Route::post('/paypal',                              [ 'uses' => 'Post\AccceptPaymentPayPalController@post' ]);
    Route::get('/pay',                  [ 'uses' => 'Page\Pay\PayController@redirect' ]);
    Route::get('/pay/{fileFolder}',     [ 'uses' => 'Page\Pay\PayController@get' ])->name('pay');
    Route::get('/integration-frame-server',                 [ 'uses' => 'Page\IntegrationFrameServerController@get' ])->name('integration_frame_server');
    Route::post('/get-starting-data-integration-frame-server', [ 'uses' => 'Post\GetStartingDataForIntegrationFrameServerController@post' ]);
    Route::post('/get-starting-data-for-integration-docs-one-version', [ 'uses' => 'Post\GetStartingDataForIntegrationDocsOneVersionController@post' ]);
    Route::post('/get-printing-office-site', [ 'uses' => 'Post\GetPrintingOfficeSiteController@post' ]);
    Route::post('/get-printing-office-data', [ 'uses' => 'Post\GetPrintingOfficeDataController@post' ]);
    Route::post('/set-printing-office-traffic-out', [ 'uses' => 'Post\SetPrintingOfficeTrafficOutController@post' ]);
    Route::post('/send-an-email-to-printing-office-manager', [ 'uses' => 'Post\SendAnEmailToManagerOfPrintingOfficeController@post' ]);
    Route::post('/add-contacts-message-fix-problem', [ 'uses' => 'Post\AddContactsMessageFixProblemController@post' ]);
    Route::post('/get-my-file-project', [ 'uses' => 'Post\GetMyFileProjectController@post' ]);
    Route::post('/add-preview-chunk', [ 'uses' => 'Post\AddPreviewChunkController@post' ]);
    Route::post('/add-user-product-file', [ 'uses' => 'Post\AddUserProductFileController@post' ]);
    Route::post('/add-product-chunk', [ 'uses' => 'Post\AddProductChunkController@post' ]);
    Route::post('/assemble-product-from-chunk', [ 'uses' => 'Post\AssembleProductFromChunkController@post' ]);
    Route::post('/check-project-for-belonging-to-user', [ 'uses' => 'Post\CheckProjectForBelongingToUserController@post' ]);
    Route::post('/get-a-set-of-starting-data-for-editor', [ 'uses' => 'Post\GetASetOfStartingDataForEditorController@post' ]);
    Route::post('/get-a-set-of-starting-data-for-create', [ 'uses' => 'Post\GetASetOfStartingDataForCreateController@post' ]);
    Route::post('/get-project-group-by-project-id', [ 'uses' => 'Post\GetProjectGroupByProjectIdController@post' ]);
    Route::post('/get-project-id-item-list', [ 'uses' => 'Post\GetProjectIdItemListController@post' ]);
    Route::post('/add-new-project-on-server', [ 'uses' => 'Post\AddNewProjectOnServerController@post' ]);
    Route::post('/add-new-project-group-on-server', [ 'uses' => 'Post\AddNewProjectOnServerController@post' ]);
    Route::post('/remove-project-group', [ 'uses' => 'Post\RemoveProjectGroupController@post' ]);
    Route::post('/save-project-group-on-server', [ 'uses' => 'Post\SaveProjectGroupOnServerController@post' ]);
    Route::post('/get-layouts-by-names', [ 'uses' => 'Post\GetLayoutsByNamesController@post' ]);
    Route::post('/add-subscribe', [ 'uses' => 'Post\AddSubscribeController@post' ]);




    Route::post('/add-layout-sheet-image', [ 'uses' => 'Post\AddLayoutSheetImageController@post' ]);
    Route::post('/get-a-list-of-downloaded-LS-files', [ 'uses' => 'Post\GetAListOfDownloadedLSFilesControlle@post' ]);
    Route::post('/remove-one-file-from-LS-files', [ 'uses' => 'Post\RemoveOneFileFromLSFilesController@post' ]);
    Route::post('/get-file-base64-for-LS-by-file-id', [ 'uses' => 'Post\GetFileBase64ForLSByFileIdController@post' ]);
    Route::post('/add-layout-sheet-base-pdf', [ 'uses' => 'Post\AddLayoutSheetBasePdfController@post' ]);
    Route::post('/create-LS-files-from-base-pdf', [ 'uses' => 'Post\CreateLSFilesFromBasePdfController@post' ]);

    Route::post('/convert-base-64-from-rgb-to-cmyk', [ 'uses' => 'Post\ConvertBase64jpegFromRgbToCmykController@post' ]);
    Route::post('/convert-base-64-pdf-from-rgb-to-cmyk', [ 'uses' => 'Post\ConvertBase64pdfFromRgbToCmykController@post' ]);

    Route::post('/convert-base_64-from-rgb-to-rgb-color-profile', [ 'uses' => 'Post\ConvertBase64jpegFromRgbToRgbColorProfileController@post' ]);




    Route::post('/create-product-files-rgb-cmyk-to-server-in-a-buffer', [ 'uses' => 'Post\CreateProductFilesRgbCmykInBufferController@post' ]);

    Route::post('/complete-printing-office-product-creation', [ 'uses' => 'Post\CompletePrintingOfficeProductCreationController@post' ]);


    
    // Route::post('/get-printing-office-orders-starting-data', [ 'uses' => 'Post\GetPrintingOfficeOrdersSratringDataController@post' ]);





    

});

// Route::get('/', function(){
//     return redirect()->route('home', ['locale' => 'en']);
// });