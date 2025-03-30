<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

trait GetStartingDataScheduleTrait{

    use GetUserDataTrait;

    public function GetStartingDataSchedule( $request, $user ){

        $result = [
            'page' => 'schedule-plan',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        $result[ 'userData' ] = $this->GetUserData( $request, $user );

        return $result;
        
    }

}


?>

