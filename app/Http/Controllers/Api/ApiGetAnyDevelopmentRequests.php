<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataLoginTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataHomeTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataMainTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataSchedulePlanTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataScheduleFactTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataLogsTrait;






class ApiGetAnyDevelopmentRequests extends Controller
{
    use GetStartingDataLoginTrait;
    use GetStartingDataHomeTrait;
    use GetStartingDataMainTrait;
    use GetStartingDataSchedulePlanTrait;
    use GetStartingDataScheduleFactTrait;
    use GetStartingDataLogsTrait;

    public function store( Request $request )
    {
        $result = [];

        $route = $request['data']['route'];
        
        $user = User::find( 1 );

        $result[ 'user' ] = $user;

        switch( $route ){

            case 'get-starting-data/':
                $result = $this->GetStartingDataHome( $request, $user );
                break;

            case 'get-starting-data/login':
                $result = $this->GetStartingDataLogin( $request, $user );
                break;

            case 'get-starting-data/main':
                $result = $this->GetStartingDataMain( $request, $user );
                break;

            case 'get-starting-data/schedule-plan':
                $result = $this->GetStartingDataSchedulePlan( $request, $user );
                break;

            case 'get-starting-data/schedule-fact':
                $result = $this->GetStartingDataScheduleFact( $request, $user );
                break;

            case 'get-starting-data/logs':
                $result = $this->GetStartingDataLogs( $request, $user );
                break;
    





        };

       



        return response()->json( $result, 200, ['Content-Type' => 'application/json'] );
    }

}
