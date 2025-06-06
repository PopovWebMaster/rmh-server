<?php 

namespace App\Http\Controllers\Traits\ValidateData;

use Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Traits\ValidateData\Rules\ApplicationRulesTrait;

trait ValidateSubApplicationDataTrait{

    use ApplicationRulesTrait;

    public function ValidateSubApplicationData( $subApplication ){

        $result = [
            'fails' => true,
            'message' => '',
        ];

        $id =               $subApplication['id'];
        $application_id =   $subApplication['application_id'];
        $air_notes =        $subApplication['air_notes'];
        $duration_sec =     $subApplication['duration_sec'];
        $name =             $subApplication['name'];
        $period_from =      $subApplication['period_from'];
        $period_to =        $subApplication['period_to'];
        $serial_num =       $subApplication['serial_num'];
        $type =             $subApplication['type'];

        $validate = Validator::make( [ 
            'id' =>             $id,
            'application_id' => $application_id,
            'air_notes' =>      $air_notes,
            'duration_sec' =>   $duration_sec,
            'name' =>           $name,
            'period_from' =>    $period_from,
            'period_to' =>      $period_to,
            'serial_num' =>     $serial_num,
            'type' =>           $type,

        ], [
            'application_id' => $this->GetApplicationRule_id(),

            'id' =>             $this->GetSubApplicationRule_id(),
            'air_notes' =>      $this->GetSubApplicationRule_air_notes(),
            'duration_sec' =>   $this->GetSubApplicationRule_duration_sec(),
            'name' =>           $this->GetSubApplicationRule_name(),
            'period_from' =>    $this->GetSubApplicationRule_period_from(),
            'period_to' =>      $this->GetSubApplicationRule_period_to(),
            'serial_num' =>     $this->GetSubApplicationRule_serial_num( $type ),
            'type' =>           $this->GetSubApplicationRule_type(),

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
