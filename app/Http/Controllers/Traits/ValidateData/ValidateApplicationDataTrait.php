<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Traits\ValidateData\Rules\ApplicationRulesTrait;

trait ValidateApplicationDataTrait{

    use ApplicationRulesTrait;

    public function ValidateApplicationData( $params ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $applicationId =           $params['applicationId'];
        $applicationName =         $params['applicationName'];
        $applicationCategoryId =   $params['applicationCategoryId'];
        $applicationNum =          $params['applicationNum'];
        $applicationManagerNotes = $params['applicationManagerNotes'];

        $validate = Validator::make( [ 
            'applicationId' =>              $applicationId,
            'applicationName' =>            $applicationName,
            'applicationCategoryId' =>      $applicationCategoryId,
            'applicationNum' =>             $applicationNum,
            'applicationManagerNotes' =>    $applicationManagerNotes,

        ], [
            'applicationId' =>              $this->GetApplicationRule_id(),
            'applicationName' =>            $this->GetApplicationRule_name(),
            'applicationCategoryId' =>      $this->GetApplicationRule_categoryId(),
            'applicationNum' =>             $this->GetApplicationRule_num(),
            'applicationManagerNotes' =>    $this->GetApplicationRule_managerNotes(),
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
