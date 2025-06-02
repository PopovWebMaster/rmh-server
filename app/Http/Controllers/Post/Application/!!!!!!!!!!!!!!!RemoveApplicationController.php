<?php

namespace App\Http\Controllers\Post\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Post\Application\Traits\RemoveApplicationTrait;
use Auth;

class RemoveApplicationController extends Controller
{
    use RemoveApplicationTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->RemoveApplication( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
