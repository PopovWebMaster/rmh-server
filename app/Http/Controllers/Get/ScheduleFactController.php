<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

class ScheduleFactController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');
        
    }

    function get( Request $request ){

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Расписание факт';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['page'] = 'schedule-fact';

        // dd( $this->data );
        
        return view( 'scheduleFact', $this->data );

    }
}
