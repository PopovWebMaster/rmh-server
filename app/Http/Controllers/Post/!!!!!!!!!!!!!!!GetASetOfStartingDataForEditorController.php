<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Post\Traits\GetASetOfStartingDataForEditor\GetASetOfStartingDataForEditorTrait;

use App\Http\Controllers\Traits\GetUserStatusTrait;
use App\Http\Controllers\Traits\GetGuestIdFromCookieTrait;

use Auth;

class GetASetOfStartingDataForEditorController extends Controller
{
    use GetASetOfStartingDataForEditorTrait;
    use GetUserStatusTrait;
    use GetGuestIdFromCookieTrait;

    public function post( Request $request, $locale ){

        $user_id = null;
        $user_status = null;

        if( Auth::check() ){
            $user = Auth::user();
            $user_id = $user->id;
            $user_status = $this->GetUserStatus();

        }else{
            $user_id = $this->GetGuestIdFromCookie( $request );
            $user_status = config( 'user_statuses.guest' );

        };

        $result = $this->GetASetOfStartingDataForEditor( $request, $locale, $user_id, $user_status );

        return response()->json( $result, 200, ['Content-Type' => 'application/json; charset=UTF-8'] );
    }
}
