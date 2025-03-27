<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataHomeTrait{

    public function GetStartingDataHome( $request, $user ){

        $result = [
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

