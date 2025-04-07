<?php

namespace App\Http\Controllers\Post\Logs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\Logs\Traits\AddPlayReportTrait;

class AddPlayReportController extends Controller
{
    use AddPlayReportTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->GetStartingDataSchedule( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
