<?php 

namespace App\Http\Controllers\Post\GetStartingData\Traits;

trait GetStartingDataLogsTrait{

    public function GetStartingDataLogs( $request, $user ){

        $result = [
            'page' => 'logs',
            'user' =>   $user,
            'data' =>   $request['data'],
        ];

        return $result;
        
    }

}


?>

