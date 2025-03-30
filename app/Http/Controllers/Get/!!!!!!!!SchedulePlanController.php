<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

// schedulePlan.blade

class SchedulePlanController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');
        
    }

    function get( Request $request ){

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Расписание план';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['page'] = 'schedule';

        // dd( $this->data );
        
        return view( 'schedule', $this->data );

    }
}
