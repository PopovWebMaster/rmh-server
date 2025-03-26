<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\Traits\AddMetaDataToThisDateTrait;
use App;


class CreateController extends SiteController
{
    use AddMetaDataToThisDateTrait;

    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request, $locale = 'en' ){

        App::setLocale( $locale );

        $this->AddMetaDataToThisDate( $locale, 'create' );
        $this->data['robots'] = 'noindex';
        
        return view( 'create', $this->data );

    }
}
