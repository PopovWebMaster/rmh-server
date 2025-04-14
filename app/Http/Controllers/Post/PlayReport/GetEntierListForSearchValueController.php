<?php

namespace App\Http\Controllers\Post\PlayReport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Http\Controllers\Post\PlayReport\Traits\GetEntierListForSearchValueTrait;

class GetEntierListForSearchValueController extends Controller
{
    use GetEntierListForSearchValueTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->GetEntierListForSearchValue( $request, $user );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
