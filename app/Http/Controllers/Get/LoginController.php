<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

class LoginController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request ){

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Auth';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['page'] = 'login';

        // dd( $this->data );
        
        return view( 'login', $this->data );

    }
}
