<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Post\Layout\Traits\GetGridEventsListTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateGridEventListTrait;

use App\Models\Company;
use App\Models\GridEvents;


trait SaveGridEventListTrait{

    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use GetGridEventsListTrait;
    use ValidateGridEventListTrait;

    public function SaveGridEventList( $request, $user ){

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
                $company = Company::where( 'alias', '=', $companyAlias )->first();
                $company_id = $company->id;

                $list =  $request['data']['list'];

                $validateList = $this->ValidateGridEventList([
                    'list' => $list,
                    'company_id' => $company_id,
                ]);

                if( $validateList[ 'fails' ] ){
                    $result[ 'message' ] = $validateList[ 'message' ];
                }else{
                    $list =  $request['data']['list'];
                    $result[ 'ok' ] = true;


                    for( $day_num = 0; $day_num < count( $list ); $day_num++ ){
                        for( $i = 0; $i < count( $list[ $day_num ]); $i++ ){
                            $dayNum =         $list[ $day_num ][ $i ][ 'dayNum' ];
                            $cutPart =        $list[ $day_num ][ $i ][ 'cutPart' ];
                            $durationTime =   $list[ $day_num ][ $i ][ 'durationTime' ];
                            $eventId =        $list[ $day_num ][ $i ][ 'eventId' ];
                            $firstSegmentId = $list[ $day_num ][ $i ][ 'firstSegmentId' ];
                            $id =             $list[ $day_num ][ $i ][ 'id' ];
                            $isKeyPoint =     $list[ $day_num ][ $i ][ 'isKeyPoint' ];
                            $notes =          $list[ $day_num ][ $i ][ 'notes' ];
                            $pushIt =         $list[ $day_num ][ $i ][ 'pushIt' ];
                            $startTime =      $list[ $day_num ][ $i ][ 'startTime' ];


                            $gridEvent = GridEvents::where( 'company_id', '=', $company_id )
                                                    ->where( 'id', '=', $id )
                                                    ->first();

                            if( $gridEvent !== null ){
                                $gridEvent->day_num = $dayNum;
                                $gridEvent->is_a_key_point = $isKeyPoint;
                                $gridEvent->start_time = $startTime;
                                $gridEvent->duration_time = $durationTime;
                                $gridEvent->event_id = $eventId;
                                $gridEvent->first_segment_id = $firstSegmentId;
                                $gridEvent->notes = $notes;
                                $gridEvent->cut_part = $cutPart;
                                $gridEvent->push_it = $pushIt;
                                $gridEvent->save();
                            };
    
                        };

                        
                    };
                    $result[ 'list' ] = $this->GetGridEventsList( $companyAlias );
                };
            };

        };

        return $result;
        
    }

}


?>

