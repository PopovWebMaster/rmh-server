<?php

namespace App\Http\Controllers\Post\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\Layout\Traits\AddNewGridEventTrait;

class AddNewGridEventController extends Controller
{
    use AddNewGridEventTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->AddNewGridEvent( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
