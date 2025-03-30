<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;
use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

trait GetStartingDataLogsTrait{
    use GetUserDataTrait;

    public function GetStartingDataLogs( $request, $user ){

        $result = [
            'page' => 'logs',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        $result[ 'userData' ] = $this->GetUserData( $request, $user );

        return $result;
        
    }

}


?>

