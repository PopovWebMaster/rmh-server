<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateNewGridEventTrait;
use App\Http\Controllers\Post\Layout\Traits\GetGridEventsListTrait;

use App\Models\Company;
use App\Models\GridEvents;

trait AddNewGridEventTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateNewGridEventTrait;
    use GetGridEventsListTrait;

    public function AddNewGridEvent( $request, $user ){

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

                $gridEventDayNum =          isset( $request['data']['dayNum'] )?        $request['data']['dayNum']: null;
                $gridEventIsAKeyPoint =     isset( $request['data']['isAKeyPoint'] )?   $request['data']['isAKeyPoint']: null;
                $gridEventStartTime =       isset( $request['data']['startTime'] )?     $request['data']['startTime']: null;
                $eventId =                  isset( $request['data']['eventId'] )?       $request['data']['eventId']: null;
                $gridEventDurationTime =    isset( $request['data']['durationTime'] )?  $request['data']['durationTime']: null;

                $validateNewGridEvent = $this->ValidateNewGridEvent([
                    'gridEventDayNum' =>        $gridEventDayNum,
                    'gridEventIsAKeyPoint' =>   $gridEventIsAKeyPoint,
                    'gridEventStartTime' =>     $gridEventStartTime,
                    'eventId' =>                $eventId,
                    'gridEventDurationTime' =>  $gridEventDurationTime,
                ]);

                if( $validateNewGridEvent[ 'fails' ] ){
                    $result[ 'message' ] = $validateNewGridEvent[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;

                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $gridEvents = new GridEvents;
                    $gridEvents->company_id =       $company_id;
                    $gridEvents->day_num =          $gridEventDayNum;
                    $gridEvents->is_a_key_point =   $gridEventIsAKeyPoint;
                    $gridEvents->start_time =       $gridEventStartTime;
                    $gridEvents->duration_time =    $gridEventDurationTime;
                    $gridEvents->event_id =         $eventId;

                    $gridEvents->save();

                    $result[ 'list' ] = $this->GetGridEventsList( $companyAlias );

                };

                
            };

        };

        return $result;
        
    }

}


?>

