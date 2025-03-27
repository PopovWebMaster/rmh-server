<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;
// mainPage.blade
class MainController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request, $company ){

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Главная';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['page'] = 'main';

        // dd( $this->data );
        
        return view( 'mainPage', $this->data );

    }
}
