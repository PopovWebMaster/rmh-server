<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use Auth;

class HomeController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request ){

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Главная';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['page'] = 'home';


        // dd( $this->data );

        // dd( Auth::check() );
        
        return view( 'home', $this->data );

    }
}
