<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

trait GetStartingDataPlayReportTrait{
    use GetUserDataTrait;

    public function GetStartingDataPlayReport( $request, $user ){

        $result = [
            'page' => 'schedule-fact',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        $result[ 'userData' ] = $this->GetUserData( $request, $user );

        return $result;
        
    }

}


?>

