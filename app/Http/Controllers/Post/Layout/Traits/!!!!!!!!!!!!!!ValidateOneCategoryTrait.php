<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use Validator;
use Illuminate\Validation\Rule;

use Storage;

use App\Models\KeyPoints;
use App\Models\Company;


trait ValidateOneCategoryTrait{

    public function ValidateOneCategory( $request, $user ){

        $result = [
            'ok' => false,
            'message' => '',
        ];

       

        return $result;
        
    }

}


?>

