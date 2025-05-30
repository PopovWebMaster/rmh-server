<?php

namespace App\Http\Controllers\Post\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Post\Application\Traits\AddNewApplicationReleaseTrait;
use Auth;

class AddNewApplicationReleaseController extends Controller
{
    use AddNewApplicationReleaseTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->AddNewApplicationRelease( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
