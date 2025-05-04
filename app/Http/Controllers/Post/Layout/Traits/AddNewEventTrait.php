<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateOneEventTrait;
use App\Http\Controllers\Post\Layout\Traits\GetEventsListTrait;

use App\Models\Company;
use App\Models\Events;

trait AddNewEventTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateOneEventTrait;
    use GetEventsListTrait;

    public function AddNewEvent( $request, $user ){

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

                $validateOneEvent = $this->ValidateOneEvent([
                    'eventName' =>  isset( $request['data']['eventName'] )?     $request['data']['eventName']: null,
                    'eventNotes' => isset( $request['data']['eventNotes'] )?    $request['data']['eventNotes']: null,
                    'eventType' =>  isset( $request['data']['eventType'] )?     $request['data']['eventType']: null,
                    'categoryId' => isset( $request['data']['categoryId'] )?    $request['data']['categoryId']: null,
                    'eventDurationTime' => isset( $request['data']['eventDurationTime'] )?    $request['data']['eventDurationTime']: null,
                ]);

                if( $validateOneEvent[ 'fails' ] ){
                    $result[ 'message' ] = $validateOneEvent[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;

                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $events = new Events;
                    $events->company_id =   $company_id;
                    $events->category_id =  $request['data']['categoryId'];
                    $events->name =         $request['data']['eventName'];
                    $events->notes =        $request['data']['eventNotes'];
                    $events->type =         $request['data']['eventType'];
                    $events->durationTime = $request['data']['eventDurationTime'];
                    $events->save();

                    $result[ 'list' ] = $this->GetEventsList( $companyAlias );

                };



                
            };

        };

        return $result;
        
    }

}


?>

