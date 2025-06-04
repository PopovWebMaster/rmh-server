<?php

namespace App\Http\Controllers\Post\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\Application\Traits\AddSubApplicationSeriesTrait;

class AddNewSubApplicationSeriesController extends Controller
{
    use AddSubApplicationSeriesTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->AddSubApplicationSeries( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
