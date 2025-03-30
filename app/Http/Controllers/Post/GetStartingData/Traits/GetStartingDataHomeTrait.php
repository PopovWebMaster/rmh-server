<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightAdminOnlyTrait;
use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

use App\Models\Company;

trait GetStartingDataHomeTrait{
    
    use ValidateAccessRightAdminOnlyTrait;
    use GetUserDataTrait;

    public function GetStartingDataHome( $request, $user ){

        $result = [
            'ok' => false,
            'message' => '',
        ];

        $validate = $this->ValidateAccessRightAdminOnly( $request, $user );

        if( $validate[ 'fails' ] ){
            $result[ 'message' ] = $validate[ 'message' ];
        }else{
            $result[ 'ok' ] = true;
            $companyList =  Company::all();

            $result[ 'companyList' ] = $companyList;
            $result[ 'userData' ] = $this->GetUserData( $request, $user );



        };

        return $result;
        
    }

}


?>

