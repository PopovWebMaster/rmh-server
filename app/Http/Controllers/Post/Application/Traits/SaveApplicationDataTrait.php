<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
// use App\Http\Controllers\Traits\ValidateData\ValidateNewApplicationTrait;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;


use App\Models\Applications;
use App\Models\Company;

trait SaveApplicationDataTrait{

    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    // use ValidateNewApplicationTrait;
    use GetApplicationListTrait;

    public function SaveApplicationData( $request, $user ){
        $result = [
            'ok' => false,
            'message' => '',
        ];

        $companyAlias = isset( $request['data']['companyAlias'] )? htmlspecialchars( $request['data']['companyAlias'] ): null;

        $validateCompanyAlias = $this->ValidateCompanyAlias( $companyAlias );
        if( $validateCompanyAlias[ 'fails' ] ){
            $result[ 'message' ] = $validateCompanyAlias[ 'message' ];

        }else{
            $validateAccessRight = $this->ValidateAccessRightCompanyAffiliation( $companyAlias, $user );

            if( $validateAccessRight[ 'fails' ] ){
                $result[ 'message' ] = $validateAccessRight[ 'message' ];
            }else{

                $result[ 'ok' ] = true;
                $result['data'] = $request['data'];

                // $applicationName =  isset( $request['data']['name'] )?     $request['data']['name']: null;
                // $applicationType =  isset( $request['data']['type'] )?     $request['data']['type']: null;

                // $validate = $this->ValidateNewApplication([
                //     'applicationName' => $applicationName,
                //     'applicationType' => $applicationType,
                // ]);

                // if( $validate[ 'fails' ] ){
                //     $result[ 'message' ] = $validate[ 'message' ];
                // }else{

                //     $company = Company::where( 'alias', '=', $companyAlias )->first();
                //     $company_id = $company->id;

                //     $result[ 'ok' ] = true;
                //     $result['data'] = $request['data'];

                //     $applications = new Applications;
                //     $applications->name = $applicationName;
                //     $applications->type = $applicationType;
                //     $applications->company_id = $company_id;
                //     $applications->save();

                //     $result[ 'list' ] = $this->GetApplicationList( $companyAlias );

                // };
            };
        };

        return $result;
    }

}


?>

