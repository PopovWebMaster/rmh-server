<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataScheduleFactTrait{

    public function GetStartingDataScheduleFact( $request, $user ){

        $result = [
            'page' => 'schedule-fact',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

