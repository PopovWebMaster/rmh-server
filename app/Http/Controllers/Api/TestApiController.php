<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestApiController extends Controller
{

    public function store( Request $request, $company = null )
    {
        $response_data = [];


        $response_data = [
            'ok' => false,
            'message' => 'тут сообщение !!!!',
            'company' => $company,
        ];


        
        return response()->json( $response_data, 200, ['Content-Type' => 'application/json'] );

    }

    
}
