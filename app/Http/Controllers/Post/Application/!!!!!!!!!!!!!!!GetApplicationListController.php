<?php

namespace App\Http\Controllers\Post\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;
use Auth;

class GetApplicationListController extends Controller
{
    use GetApplicationListTrait;

    public function post( Request $request ){

        $user = null;

        if( Auth::check() ){
            $user = Auth::user();
        };

        $result = $this->GetApplicationList( 'не трогать этот метод, по запаре его создал!!!!!!!!!!!!' );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
