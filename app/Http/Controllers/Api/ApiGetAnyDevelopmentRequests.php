<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataLoginTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataHomeTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataMainTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataScheduleTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataPlayReportTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataLogsTrait;
use App\Http\Controllers\Post\Login\Traits\LoginUserByPostTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataAccessIsClosedTrait;

use App\Http\Controllers\Post\Logs\Traits\AddPlayReportTrait;
use App\Http\Controllers\Post\PlayReport\Traits\GetOneDayPlayReportListTrait;


class ApiGetAnyDevelopmentRequests extends Controller
{
    use GetStartingDataLoginTrait;
    use GetStartingDataHomeTrait;
    use GetStartingDataMainTrait;
    use GetStartingDataScheduleTrait;
    use GetStartingDataPlayReportTrait;
    use GetStartingDataLogsTrait;
    use LoginUserByPostTrait;
    use GetStartingDataAccessIsClosedTrait;
    use AddPlayReportTrait;
    use GetOneDayPlayReportListTrait;

    public function store( Request $request )
    {
        $result = [];

        $route = $request['data']['route'];
        
        $user = User::find( 1 );

        $result[ 'user' ] = $user;

        switch( $route ){

            case 'get-starting-data/home':
                $result = $this->GetStartingDataHome( $request, $user );
                break;

            case 'get-starting-data/login':
                $result = $this->GetStartingDataLogin( $request, $user );
                break;

            case 'get-starting-data/main':
                $result = $this->GetStartingDataMain( $request, $user );
                break;

            case 'get-starting-data/schedule':
                $result = $this->GetStartingDataSchedule( $request, $user );
                break;

            case 'get-starting-data/play-report':
                $result = $this->GetStartingDataPlayReport( $request, $user );
                break;

            case 'get-starting-data/logs':
                $result = $this->GetStartingDataLogs( $request, $user );
                break;

            case 'get-starting-data/access-is-closed':
                $result = $this->GetStartingDataAccessIsClosed( $request, $user );
                break;
    
            case 'login-by-post':
                $result = $this->LoginUserByPost( $request );
                break;

            case 'logs/add-play-report':
                $result = $this->AddPlayReport( $request, $user );
                break;


            case 'play-report/get-one-day-entire-list':
                $result = $this->GetOneDayPlayReportList( $request, $user );
                break;








        };

       



        return response()->json( $result, 200, ['Content-Type' => 'application/json'] );
    }

}
