<?php

namespace App\Http\Controllers\Post\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\Layout\Traits\SaveGridEventListTrait;

class SaveGridEventsListController extends Controller
{
    use SaveGridEventListTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->SaveGridEventList( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
