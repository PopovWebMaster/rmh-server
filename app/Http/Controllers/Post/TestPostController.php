<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class TestPostController extends Controller
{
    public function post( Request $request ){

        $user_id = null;
        $user_status = null;

        if( Auth::check() ){
            $user = Auth::user();
            $user_id = $user->id;
            $user_status = 'зАРЕГИСТРИРОВАН';

        };

        $result = [
            'user_id' => $user_id,
            'user_status' => $user_status,
        ];

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
