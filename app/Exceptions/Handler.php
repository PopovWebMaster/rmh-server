<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Storage;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    // public function render($request, Exception $exception)
    // {
    //     return parent::render($request, $exception);
    // }

    public function render($request, Exception $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {

                $list_of_pages = [
                    'vendors',
                    'main',
                    'pageNotFound',
                ];
                $data = [];

                for( $i = 0; $i < count( $list_of_pages ); $i++ ){
                    $name_of_page = $list_of_pages[ $i ];
                    $url = url('/');
                    $css =  Storage::disk('assets_css')->allFiles();
                    foreach( $css as $item ){
                        if( is_numeric( strpos( $item, $name_of_page ) ) ){ 
                            $name = 'css_'.$name_of_page;
                            $data[ $name ] = $url.'/public/assets/css/'.$item;
                            break;
                        };
                    };
                    $js =   Storage::disk('assets_js')->allFiles();
                    foreach( $js as $item ){
                        if( is_numeric( strpos( $item, $name_of_page ) ) ){ // (!== false) не исправлять, так надо
                            $name = 'js_'.$name_of_page;
                            $data[ $name ] = $url.'/public/assets/js/'.$item;
                            break;
                        };
                    };
                };

                return response()->view('errors.' . '404', $data, 404);
            }
        }
    
        return parent::render($request, $exception);
    }
}
