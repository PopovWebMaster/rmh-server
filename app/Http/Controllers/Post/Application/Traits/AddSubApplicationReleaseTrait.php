<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
// use App\Http\Controllers\Traits\ValidateData\ValidateNewApplicationTrait;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;

use App\Models\Application;
use App\Models\Company;

trait AddSubApplicationReleaseTrait{

    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    // use ValidateNewApplicationTrait;
    use GetApplicationListTrait;

    public function AddSubApplicationRelease( $request, $user ){
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

                // $applicationName =          isset( $request['data']['applicationName'] )?           $request['data']['applicationName']: null;
                // $applicationNum =           isset( $request['data']['applicationNum'] )?            $request['data']['applicationNum']: null;
                // $applicationCategoryId =    isset( $request['data']['applicationCategoryId'] )?     $request['data']['applicationCategoryId']: null;
                // $applicationManagerNotes =  isset( $request['data']['applicationManagerNotes'] )?   $request['data']['applicationManagerNotes']: null;

                // $validate = $this->ValidateNewApplication([
                //     'applicationName' =>            $applicationName,
                //     'applicationNum' =>             $applicationNum,
                //     'applicationCategoryId' =>      $applicationCategoryId,
                //     'applicationManagerNotes' =>    $applicationManagerNotes,

                // ]);

                // if( $validate[ 'fails' ] ){
                //     $result[ 'message' ] = $validate[ 'message' ];
                // }else{

                //     $result[ 'ok' ] = true;

                //     $company = Company::where( 'alias', '=', $companyAlias )->first();
                //     $company_id = $company->id;

                //     $application = new Application;

                //     $application->company_id =      $company_id;
                //     $application->manager_id =      $user->id;
                //     $application->name =            $applicationName;
                //     $application->num =             $applicationNum;
                //     $application->manager_notes =   $applicationManagerNotes;
                //     $application->category_id =     $applicationCategoryId;

                //     $application->save();

                //     $result[ 'list' ] = $this->GetApplicationList( $companyAlias );

                // };
            };
        };

        return $result;
    }

}


?>

