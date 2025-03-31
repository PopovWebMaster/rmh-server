<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

use Auth;

class LogoutController extends SiteController
{
    public function __construct(){
        parent::__construct();
        $this->middleware('auth');

        
    }

    function get( Request $request ){



        if( Auth::check() ){
            Auth::logout();
        };

        return redirect()->route( 'login' );


    }
}
