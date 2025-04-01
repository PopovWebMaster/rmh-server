<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Models\UserCompany;
use App\Models\Company;


use Auth;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightAdminOnlyTrait;

class HomeController extends SiteController
{
    use ValidateAccessRightAdminOnlyTrait;

    public function __construct(){
        parent::__construct();
        $this->middleware('auth');

    }

    function get( Request $request ){

        if( Auth::check() ){
            $user = Auth::user();
            $validateAccessRight = $this->ValidateAccessRightAdminOnly( $request, $user );

            $this->data['robots'] = 'noindex';
            $this->data['pageTitle'] = 'Главная';
            $this->data['companyAlias'] = '';
            $this->data['companyName'] = '';
            $this->data['companyType'] = '';

            if( $validateAccessRight[ 'fails' ]){

                

                $user_id = $user->id;
                $userCompany = UserCompany::where( 'user_id', '=', $user_id )->first();
                $company_id = $userCompany->company_id;
                $company = Company::find( $company_id );

                // dd( $company  );

                $this->data['companyAlias'] = $company->alias;
                $this->data['companyName'] = $company->name;
                $this->data['companyType'] = $company->type;
                $this->data['page'] = 'access-is-closed';

                return view( 'accessIsClosed', $this->data );

            }else{
                $this->data['page'] = 'home';
                return view( 'home', $this->data );
            };

        }else{
            return redirect()->route( 'login' );

        };



        

        // $this->data['robots'] = 'noindex';
        // $this->data['pageTitle'] = 'Главная';
        // $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        // $this->data['companyName'] = config( 'company.list.1_resp.name' );
        // $this->data['page'] = 'home';


        // // dd( $this->data );

        // // dd( Auth::check() );
        
        // return view( 'home', $this->data );

    }
}
