<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

// use App\Http\Controllers\Traits\ValidateData\ValidateOneEventTrait;
use App\Http\Controllers\Post\Layout\Traits\GetGridEventsListTrait;

use App\Models\Company;
use App\Models\Events;


trait SaveGridEventListTrait{

    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    // use ValidateOneEventTrait;
    use GetGridEventsListTrait;

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
                $result[ 'ok' ] = true;

                $list =  $request['data']['list'];

                // $company = Company::where( 'alias', '=', $companyAlias )->first();
                // $company_id = $company->id;

                // $result[ 'message' ] = [];

                // for( $i = 0; $i < count( $list ); $i++ ){

                //     $eventId =              $list[ $i ][ 'id' ];
                //     $categoryId =           $list[ $i ][ 'category_id' ];
                //     $eventName =            $list[ $i ][ 'name' ];
                //     $eventNotes =           $list[ $i ][ 'notes' ];
                //     $eventType =            $list[ $i ][ 'type' ];
                //     $eventDurationTime =    $list[ $i ][ 'durationTime' ];


                //     $validate = $this->ValidateOneEvent([
                //         'eventName' =>          $eventName,
                //         'eventNotes' =>         $eventNotes,
                //         'eventType' =>          $eventType,
                //         'categoryId' =>         $categoryId,
                //         'eventDurationTime' =>  $eventDurationTime,

                //     ]);

                //     if( $validate[ 'fails' ] ){
                //         array_push( $result[ 'message' ], $validate[ 'message' ]);
                //     }else{

                //         $events = Events::where( 'id', '=', $eventId )
                //                         ->where( 'company_id', '=', $company_id )
                //                         ->first();

                //         if( $events !== null ){
                //             $events->category_id = $categoryId;
                //             $events->notes = $eventNotes;
                //             $events->name = $eventName;
                //             $events->durationTime = $eventDurationTime;
                //             $events->save();
                //         };

                //     };

                // };



                // $result[ 'list' ] = $this->GetGridEventsList( $companyAlias );
                $result[ 'list' ] = $list;

            };

        };

        return $result;
        
    }

}


?>

