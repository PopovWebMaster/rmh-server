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
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataLayoutTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataApplicationTrait;

use App\Http\Controllers\Post\Login\Traits\LoginUserByPostTrait;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataAccessIsClosedTrait;

use App\Http\Controllers\Post\Logs\Traits\AddPlayReportTrait;
use App\Http\Controllers\Post\PlayReport\Traits\GetOneDayPlayReportListTrait;
use App\Http\Controllers\Post\PlayReport\Traits\GetEntierListForSearchValueTrait;
use App\Http\Controllers\Post\Layout\Traits\SaveKeyPointListTrait;
use App\Http\Controllers\Post\Layout\Traits\SaveCategoryListTrait;
use App\Http\Controllers\Post\Layout\Traits\AddNewCategoryTrait;
use App\Http\Controllers\Post\Layout\Traits\RemoveCategoryTrait;
use App\Http\Controllers\Post\Layout\Traits\AddNewEventTrait;
use App\Http\Controllers\Post\Layout\Traits\RemoveEventTrait;
use App\Http\Controllers\Post\Layout\Traits\SaveEventListTrait;
use App\Http\Controllers\Post\Layout\Traits\SaveGridEventListTrait;
use App\Http\Controllers\Post\Layout\Traits\RemoveGridEventTrait;
use App\Http\Controllers\Post\Layout\Traits\AddNewGridEventTrait;
use App\Http\Controllers\Post\Layout\Traits\SetGridEventsDayListAfterCuttingTrait;


// use App\Http\Controllers\Post\Application\Traits\AddNewApplicationTrait;

// use App\Http\Controllers\Post\Application\Traits\SaveApplicationDataTrait;
// use App\Http\Controllers\Post\Application\Traits\RemoveApplicationTrait;
// use App\Http\Controllers\Post\Application\Traits\AddNewApplicationSeriesTrait;
// use App\Http\Controllers\Post\Application\Traits\AddNewApplicationReleaseTrait;

use App\Http\Controllers\Post\Application\Traits\AddNewApplicationTrait;
use App\Http\Controllers\Post\Application\Traits\GetApplicationDataTrait;

use App\Http\Controllers\Post\Application\Traits\AddSubApplicationReleaseTrait;
use App\Http\Controllers\Post\Application\Traits\AddSubApplicationSeriesTrait;
use App\Http\Controllers\Post\Application\Traits\SaveApplicationChangesTrait;



class ApiGetAnyDevelopmentRequests extends Controller
{
    use GetStartingDataLoginTrait;
    use GetStartingDataHomeTrait;
    use GetStartingDataMainTrait;
    use GetStartingDataScheduleTrait;
    use GetStartingDataPlayReportTrait;
    use GetStartingDataLogsTrait;
    use GetStartingDataLayoutTrait;
    use GetStartingDataApplicationTrait;
    use LoginUserByPostTrait;
    use GetStartingDataAccessIsClosedTrait;
    use AddPlayReportTrait;
    use GetOneDayPlayReportListTrait;
    use GetEntierListForSearchValueTrait;
    use SaveKeyPointListTrait;
    use SaveCategoryListTrait;
    use AddNewCategoryTrait;
    use RemoveCategoryTrait;
    use AddNewEventTrait;
    use RemoveEventTrait;
    use SaveEventListTrait;
    use SaveGridEventListTrait;
    use RemoveGridEventTrait;
    use AddNewGridEventTrait;
    use SetGridEventsDayListAfterCuttingTrait;
    // use AddNewApplicationTrait;
    
    // use SaveApplicationDataTrait;
    // use RemoveApplicationTrait;
    // use AddNewApplicationSeriesTrait;
    // use AddNewApplicationReleaseTrait;

    use AddNewApplicationTrait;
    use GetApplicationDataTrait;

    use AddSubApplicationReleaseTrait;
    use AddSubApplicationSeriesTrait;
    use SaveApplicationChangesTrait;


    public function store( Request $request )
    {
        $result = [];

        $route = $request['data']['route'];
        
        $user = User::find( 3 );

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

            case 'get-starting-data/layout':
                $result = $this->GetStartingDataLayout( $request, $user );
                break;

            case 'get-starting-data/applications':
                $result = $this->GetStartingDataApplication( $request, $user );
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

            case 'play-report/get-entier-list-for-search-value':
                $result = $this->GetEntierListForSearchValue( $request, $user );
                break;


            case 'layout/save-key-point-list':
                $result = $this->SaveKeyPointList( $request, $user );
                break;

            case 'layout/save-category-list':
                $result = $this->SaveCategoryList( $request, $user );
                break;

            case 'layout/add-new-category':
                $result = $this->AddNewCategory( $request, $user );
                break;

            case 'layout/remove-category':
                $result = $this->RemoveCategory( $request, $user );
                break;
    

            case 'layout/add-new-event':
                $result = $this->AddNewEvent( $request, $user );
                break;

            case 'layout/remove-event':
                $result = $this->RemoveEvent( $request, $user );
                break;

            case 'layout/save-event-list':
                $result = $this->SaveEventList( $request, $user );
                break;

            case 'layout/save-grid-event-list':
                $result = $this->SaveGridEventList( $request, $user );
                break;

            case 'layout/remove-grid-event':
                $result = $this->RemoveGridEvent( $request, $user );
                break;

            case 'layout/add-new-grid-event':
                $result = $this->AddNewGridEvent( $request, $user );
                break;

            case 'layout/set-grid-events-day-list-after-cutting':
                $result = $this->SetGridEventsDayListAfterCutting( $request, $user );
                break;

            case 'applications/add-new-application':
                $result = $this->AddNewApplication( $request, $user );
                break;

            case 'applications/get-application-data':
                $result = $this->GetApplicationData( $request, $user );
                break;


            case 'applications/add-new-subapplication-release':
                $result = $this->AddSubApplicationRelease( $request, $user );
                break;

            case 'applications/add-new-subapplication-series':
                $result = $this->AddSubApplicationSeries( $request, $user );
                break;

            case 'applications/seve-application-data':
                $result = $this->SaveApplicationChanges( $request, $user );
                break;


// seve-application-data

                






        };

       



        return response()->json( $result, 200, ['Content-Type' => 'application/json'] );
    }

}
