<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;

trait ValidateOneCategoryTrait{

    public function ValidateOneCategory( $params ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $categoryName =      $params[ 'categoryName' ];
        $categoryPrefix =    $params[ 'categoryPrefix' ];
        $categoryColorText = $params[ 'categoryColorText' ];
        $categoryColorBG =   $params[ 'categoryColorBG' ];

        $validate = Validator::make( [ 
            'categoryName' =>       $categoryName,
            'categoryPrefix' =>     $categoryPrefix,
            'categoryColorText' =>  $categoryColorText,
            'categoryColorBG' =>    $categoryColorBG,

        ], [
            'categoryName' =>       [ 'required', 'string', 'max:255' ],
            'categoryPrefix' =>     [ 'required', 'string', 'max:255' ],
            'categoryColorText' =>  [ 'required', 'string', 'min:4', 'max:20' ],
            'categoryColorBG' =>    [ 'required', 'string', 'min:4', 'max:20' ],

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
