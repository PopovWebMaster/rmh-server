<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateEventIdTrait;
// use App\Http\Controllers\Post\Layout\Traits\GetCategoryListTrait;
use App\Http\Controllers\Post\Layout\Traits\GetEventsListTrait;

use App\Models\Company;
use App\Models\Events;



trait RemoveEventTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateEventIdTrait;
    use GetEventsListTrait;

    public function RemoveEvent( $request, $user ){

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
                // $result[ 'ok' ] = true;
                $result['data'] = $request['data'];

                $company = Company::where( 'alias', '=', $companyAlias )->first();
                $company_id = $company->id;

                $eventId = isset( $request['data']['eventId'] )? $request['data']['eventId']: null;

                $validateEventId = $this->ValidateEventId([
                    'eventId' =>    $eventId,
                    'companyId' =>  $company_id,
                ]);

                if( $validateEventId[ 'fails' ] ){
                    $result[ 'message' ] = $validateCategoryId[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;

                    $event = Events::find( $eventId );
                    $event->delete();

                    $result[ 'list' ] = $this->GetEventsList( $companyAlias );

                };

                
            };

        };

        return $result;
        
    }

}


?>

