<?php

namespace App\Http\Controllers\Post\GetStartingData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataAccessIsClosedTrait;

class GetStartingDataAccessIsClosedController extends Controller
{
    use GetStartingDataAccessIsClosedTrait;

    public function post( Request $request ){

        $user = null;

        $result = [];

        if( Auth::check() ){
            $user =     Auth::user();
            $result =   $this->GetStartingDataAccessIsClosed( $request, $user );
        };

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
