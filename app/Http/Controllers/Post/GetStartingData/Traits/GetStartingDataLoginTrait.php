<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataLoginTrait{

    public function GetStartingDataLogin( $request, $user ){

        $result = [
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

