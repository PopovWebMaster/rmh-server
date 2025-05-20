<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

// use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

// use App\Http\Controllers\Traits\ValidateData\ValidateEventIdTrait;
// use App\Http\Controllers\Post\Layout\Traits\GetCategoryListTrait;
use App\Http\Controllers\Post\Layout\Traits\GetGridEventsListTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateGridEventIdTrait;

use App\Models\Company;
use App\Models\GridEvents;


trait RemoveGridEventTrait{

    // use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    // use ValidateEventIdTrait;
    use GetGridEventsListTrait;
    use ValidateGridEventIdTrait;

    public function RemoveGridEvent( $request, $user ){

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

                $gridEventId = isset( $request['data']['gridEventId'] )? $request['data']['gridEventId']: null;

                $validate = $this->ValidateGridEventId( [ 'gridEventId' => $gridEventId ] );
                if( $validate[ 'fails' ] ){
                    $result[ 'message' ] = $validate[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;
                    // $result['data'] = $request['data'];

                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $models = GridEvents::where( 'company_id', '=', $company_id )->where( 'first_segment_id', '=', $gridEventId )->get();

                    if( count( $models ) > 0 ){
                        $models->map->delete();
                    };

                    $gridEvents = GridEvents::find( $gridEventId );
                    if( $gridEvents !== null ){
                        $gridEvents->delete();
                    };

                    $result[ 'list' ] = $this->GetGridEventsList( $companyAlias );

                };

            };

        };

        return $result;
        
    }

}


?>

