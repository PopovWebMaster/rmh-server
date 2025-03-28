<?php

namespace App\Http\Controllers\Post\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Post\Login\Traits\LoginUserByPostTrait;
use Auth;

class LoginByPostController extends Controller
{
    use LoginUserByPostTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->LoginUserByPost( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
