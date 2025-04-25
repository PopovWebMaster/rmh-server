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

        $eventName =    $params[ 'eventName' ];
        $eventNotes =   $params[ 'eventNotes' ];
        $eventType =    $params[ 'eventType' ];
        $categoryId =   $params[ 'categoryId' ];

        $validate = Validator::make( [ 
            'eventName' =>      $eventName,
            'eventNotes' =>     $eventNotes,
            'eventType' =>      $eventType,
            'categoryId' =>     $categoryId,

        ], [
            'eventName' =>      [ 'required', 'string', 'max:255' ],
            'eventNotes' =>     [ 'nullable', 'string', 'max:255' ],
            'eventType' =>      [ 'required', 'string', Rule::in(['file', 'block']), ],
            'categoryId' =>     [ 'nullable', 'exists:category,id' ],

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
