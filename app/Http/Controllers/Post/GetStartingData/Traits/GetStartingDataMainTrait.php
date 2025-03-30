<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use Validator;
use Illuminate\Validation\Rule;

trait GetStartingDataMainTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;

    public function GetStartingDataMain( $request, $user ){

        $result = [
            'ok' => false,
            'message' => '',
        ];

        $companyAlias = isset( $request['data']['companyAlias'] )? htmlspecialchars( $request['data']['companyAlias'] ): null;

        $validateCompanyAlias = $this->ValidateCompanyAlias( $companyAlias );
        if( $validateCompanyAlias[ 'fails' ] ){
            $result[ 'message' ] = $validateCompanyAlias[ 'message' ];

        }else{
            // $companyAlias = $validateCompanyAlias[ 'value' ];

            $validateAccessRight = $this->ValidateAccessRightCompanyAffiliation( $companyAlias, $user );

            if( $validateAccessRight[ 'fails' ] ){
                $result[ 'message' ] = $validateAccessRight[ 'message' ];
            }else{
                $result[ 'ok' ] = true;
                $userData = $this->GetUserData( $request, $user );
                $result[ 'userData' ] = $userData;
                
            };

        };

        return $result;
        
    }

}


?>

