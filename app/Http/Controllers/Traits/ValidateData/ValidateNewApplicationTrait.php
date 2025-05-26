<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;

trait ValidateNewApplicationTrait{

    public function ValidateNewApplication( $params ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $applicationName =  $params[ 'applicationName' ];
        $applicationType =  $params[ 'applicationType' ];

        $validate = Validator::make( [ 
            'applicationName' =>    $applicationName,
            'applicationType' =>    $applicationType,
        ], [
            'applicationName' => [ 'required', 'string', 'min:1', 'max:255' ],
            'applicationType' => [ 'required', 'string', Rule::in([ 'series', 'release' ]), ],
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
