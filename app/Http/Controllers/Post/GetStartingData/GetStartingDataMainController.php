<?php

namespace App\Http\Controllers\Post\GetStartingData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\GetStartingData\Traits\GetStartingDataMainTrait;

class GetStartingDataMainController extends Controller
{
    use GetStartingDataMainTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->GetStartingDataMain( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
