<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

use Auth;

class LoginController extends SiteController
{
    use GetUserDataTrait;

    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request ){

        if( Auth::check() ){
            $user = Auth::user(); 
            $userData = $this->GetUserData( $request, $user );
            if( $userData[ 'position' ] === 'admin' ){
                return redirect()->route( 'home' );
            }else{
                $company = $userData[ 'company' ][0];
                return redirect()->route( 'main', [ 'company' => $company ] );
            };

        }else{

            $this->data['robots'] = 'noindex';
            $this->data['pageTitle'] = 'Login';
            $this->data['companyAlias'] = '';
            $this->data['companyName'] = '';
            $this->data['companyType'] = '';
            $this->data['page'] = 'login';
            
            return view( 'login', $this->data );
        };

        


    }
}
