<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Route;

use Cookie;


use App\Http\Controllers\Traits\GetGuestIdTrait;


class SiteController extends Controller
{
    use GetGuestIdTrait;

    protected $data;

    protected function __construct(){

        $this->data = [];

        $this->add_js_css_files_to_the_data([
            'vendors',
            'main',
            'admin',
            'home',
            'create',
            'layout_sheet',
            'editor',
            'templates',
            'template',
            'auth',
            'login',
            'registration',
            'reset_password',
            'integration',
            'integration_docs',
            'integration_docs_version',
            'integration_frame_server',
            'integration_frame_client',
            'integration_frame_docs',
            'integration_frame_docs_one_version',

            'product_download',
            'my_files',
            'my_file',

            'pay_RUB',
            'pay_FONDY',
            'pay_DEFAULT',
            'contacts',
            'printing_office_orders',



        ]);

        $this->AddGuestId();

    } 

    private function AddGuestId(){
        if( Cookie::get('guestId') === null ){
            $guest_id = $this->GetGuestId();
            Cookie::queue( Cookie::make( 'guestId', $guest_id, 31536000 ));
        };
    }

    private function add_js_css_files_to_the_data( $list_of_pages ){
        
        for( $i = 0; $i < count( $list_of_pages ); $i++ ){

            $name_of_page = $list_of_pages[ $i ];

            $url = url('/');



            $css =  Storage::disk('assets_css')->allFiles();
            foreach( $css as $item ){

                if( is_numeric( strpos( $item, $name_of_page ) ) ){ 

                    // if( $name_of_page === 'main' ){
                    //     if( !Storage::disk('App_css')->exists( $item ) ){
                    //         Storage::disk('App_css')->put( $item, Storage::disk('assets_css')->get( $item ) );
                    //     };
                    // };

                    // if( $name_of_page === 'integration' ){
                    //     if( !Storage::disk('App_css')->exists( $item ) ){
                    //         Storage::disk('App_css')->put( $item, Storage::disk('assets_css')->get( $item ) );
                    //         // Storage::disk('assets_css')->delete( $item );
                    //     };
                    // };

                    $name = 'css_'.$name_of_page;
                    $this->data[ $name ] = $url.'/public/assets/css/'.$item;
                    break;
                };
            };

            $js =   Storage::disk('assets_js')->allFiles();
            foreach( $js as $item ){
                if( is_numeric( strpos( $item, $name_of_page ) ) ){ // (!== false) не исправлять, так надо


                    // if( $name_of_page === 'vendors' ){
                    //     if( !Storage::disk('App_js')->exists( $item ) ){
                    //         Storage::disk('App_js')->put( $item, Storage::disk('assets_js')->get( $item ) );
                    //     };
                    // };

                    // if( $name_of_page === 'integration' ){
                    //     if( !Storage::disk('App_js')->exists( $item ) ){
                    //         Storage::disk('App_js')->put( $item, Storage::disk('assets_js')->get( $item ) );
                    //         // Storage::disk('assets_js')->delete( $item );
                    //     };
                    // };


                    $name = 'js_'.$name_of_page;
                    $this->data[ $name ] = $url.'/public/assets/js/'.$item;
                    break;
                };
            };

        };

    }


    // protected function get_list_of_localization_routes(){

    //     // $current_route_name = Route::currentRouteName();
    //     $list_locale = config('app.list_locale');


    //     $result = [];

    //     foreach( $list_locale as $name_locale ){
    //         $result[ $name_locale ] = route( 'editor', ['locale' => $name_locale] );

    //     };

    //     return $result;

    // }


}
