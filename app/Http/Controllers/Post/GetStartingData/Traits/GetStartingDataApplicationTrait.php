<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

// use App\Http\Controllers\Post\Layout\Traits\GetKeyPointListTrait;
use App\Http\Controllers\Post\Layout\Traits\GetCategoryListTrait;
use App\Http\Controllers\Post\Layout\Traits\GetEventsListTrait;
use App\Http\Controllers\Post\Layout\Traits\GetGridEventsListTrait;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;

use Validator;
use Illuminate\Validation\Rule;

use Storage;

trait GetStartingDataApplicationTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    // use GetKeyPointListTrait;
    use GetCategoryListTrait;
    use GetEventsListTrait;
    use GetGridEventsListTrait;
    use GetApplicationListTrait;

    public function GetStartingDataApplication( $request, $user ){

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
                $result[ 'userData' ] = $this->GetUserData( $request, $user );
                // $result[ 'keyPountList' ] = $this->GetKeyPointList( $companyAlias );
                $result[ 'categoryList' ] = $this->GetCategoryList( $companyAlias );
                $result[ 'eventsList' ] = $this->GetEventsList( $companyAlias );
                $result[ 'gridEventsList' ] = $this->GetGridEventsList( $companyAlias );
                $result[ 'applicationList' ] = $this->GetApplicationList( $companyAlias );






                

                
            };

        };

        return $result;
        
    }

}


?>

