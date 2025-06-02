<?php

namespace App\Http\Controllers\Post\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\Application\Traits\AddNewApplicationTrait;

class AddNewApplicationController extends Controller
{
    use AddNewApplicationTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->AddNewApplication( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
