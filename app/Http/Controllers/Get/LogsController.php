<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use Auth;
use App\Models\Company;

class LogsController extends SiteController
{
    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;

    public function __construct(){
        parent::__construct();
        $this->middleware('auth');

        
    }

    function get( Request $request, $company ){

        $validate = $this->ValidateCompanyAlias( $company );

        if( $validate[ 'fails' ] ){
            abort(404);

        }else{
            $this->data['robots'] = 'noindex';
            $this->data['pageTitle'] = 'Logs';

            if( Auth::check() ){

                $user = Auth::user();

                $validateAccessRight = $this->ValidateAccessRightCompanyAffiliation( $company, $user );

                if( $validateAccessRight[ 'fails' ]){
                    $this->data['companyAlias'] = $company;
                    $this->data['companyName'] = '';
                    $this->data['companyType'] = '';
                    $this->data['page'] = 'access-is-closed';
                    return view( 'accessIsClosed', $this->data );

                }else{
                    $companyModel = Company::where( 'alias', '=', $company )->first();

                    $this->data['companyAlias'] = $company;
                    $this->data['companyName'] = $companyModel->name;
                    $this->data['companyType'] = $companyModel->type;

                    $this->data['page'] = 'logs';
                    return view( 'logs', $this->data );
                };

                // dd( $this->data );


            }else{
                return redirect()->route( 'login' );
            };



        };

        
        // $this->data['robots'] = 'noindex';
        // $this->data['pageTitle'] = 'Logs';
        // $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        // $this->data['companyName'] = config( 'company.list.1_resp.name' );
        // $this->data['companyType'] = 'tv';
        // $this->data['page'] = 'logs';
        // // dd( $this->data );
        
        // return view( 'logs', $this->data );

    }
}
