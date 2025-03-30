<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;
use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

trait GetStartingDataLoginTrait{
    use GetUserDataTrait;

    public function GetStartingDataLogin( $request, $user ){

        $result = [
            'ok' => true,
            'message' => '',
        ];



        // $result[ 'userData' ] = $this->GetUserData( $request, $user );

        return $result;
        
    }

}


?>

