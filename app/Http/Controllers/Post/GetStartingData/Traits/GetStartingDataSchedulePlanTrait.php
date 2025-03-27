<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataSchedulePlanTrait{

    public function GetStartingDataSchedulePlan( $request, $user ){

        $result = [
            'page' => 'schedule-plan',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

