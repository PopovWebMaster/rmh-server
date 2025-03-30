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

        $result = [ 
            'ok' => false,
            'message' => '',
        ];
        
        if( Auth::check() ){
            // $user = Auth::user(); 
        }else{
            $result = $this->LoginUserByPost( $request );
        };

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
