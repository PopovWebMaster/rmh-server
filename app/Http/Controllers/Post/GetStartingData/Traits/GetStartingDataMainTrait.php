<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataMainTrait{

    public function GetStartingDataMain( $request, $user ){

        $result = [
            'page' => 'main',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

