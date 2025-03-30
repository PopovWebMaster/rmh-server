<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;


trait ValidateCompanyAliasTrait{

    public function ValidateCompanyAlias( $companyAlias ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $validate = Validator::make( [ 
            'companyAlias' => $companyAlias,
        ], [
            'companyAlias' => [ 'required', 'string', 'exists:company,alias' ],
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
