<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationsController extends SiteController
{
     public function __construct(){
        parent::__construct();
        // $this->middleware('auth');
    }

    function get( Request $request ){

        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Заявки';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['companyType'] = 'tv';
        $this->data['page'] = 'applications';

        // dd( $this->data );
        
        return view( 'applications', $this->data );

    }
}
