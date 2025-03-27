<?php

namespace App\Http\Controllers\Post\GetStartingData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataSchedulePlanTrait;

class GetStartingDataSchedulePlanController extends Controller
{
    use GetStartingDataSchedulePlanTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->GetStartingDataSchedulePlan( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
