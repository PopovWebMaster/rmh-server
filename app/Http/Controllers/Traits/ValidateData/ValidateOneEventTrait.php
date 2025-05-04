<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;

trait ValidateOneEventTrait{

    public function ValidateOneEvent( $params ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $eventName =            $params[ 'eventName' ];
        $eventNotes =           $params[ 'eventNotes' ];
        $eventType =            $params[ 'eventType' ];
        $categoryId =           $params[ 'categoryId' ];
        $eventDurationTime =    $params[ 'eventDurationTime' ];

        $validate = Validator::make( [ 
            'eventName' =>              $eventName,
            'eventNotes' =>             $eventNotes,
            'eventType' =>              $eventType,
            'categoryId' =>             $categoryId,
            'eventDurationTime' =>      $eventDurationTime,
        ], [
            'eventName' =>          [ 'required', 'string', 'max:255' ],
            'eventNotes' =>         [ 'nullable', 'string', 'max:255' ],
            'eventType' =>          [ 'required', 'string', Rule::in(['file', 'block']), ],
            'categoryId' =>         [ 'nullable', 'exists:category,id' ],
            'eventDurationTime' =>  [ 'required', 'string', 'max:10' ],
        ]);

        if( $validate->fails() ){
            $result[ 'message' ] = $validate->getMessageBag()->all();
        }else{
            $result[ 'fails' ] = false;
        };

        return $result;
        
    }

}


?>
