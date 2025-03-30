<?php 

namespace App\Http\Controllers\Post\Login\Traits;

use Validator;
use Illuminate\Validation\Rule;

use App\User;
use Auth;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;


trait LoginUserByPostTrait{

    use GetUserDataTrait;

    public function LoginUserByPost( $request ){

        $result = [
            'ok' => false,
            'message' => '',
        ];

        $email =    isset( $request['data']['email'] )? htmlspecialchars( $request['data']['email'] ): null;
        $password = isset( $request['data']['password'] )? htmlspecialchars( $request['data']['password'] ): null;

        $validate = Validator::make( [ 
            'email' => $email,
            'password' => $password,
        ], [
            'email' => [ 'required', 'email', 'exists:users,email', ],
            'password' => [ 'required', 'string', 'min:8', 'max:20',],
        ]);

        if( $validate->fails() ){
            $result[ 'message' ] = $validate->getMessageBag()->all();
        }else{

            $authresult = Auth::attempt([
                'email' => $email,
                'password' => $password,
            ], true );

            if( $authresult ){
                $result[ 'ok' ] = true;
                $result[ 'message' ] = '';

                $user = User::where( 'email', '=', $email )->first();

                $result[ 'userData' ] = $this->GetUserData( $request, $user );

            }else{
                $result[ 'message' ] = 'Не правильные логин или пароль';
            };

                
        };

        return $result;
        
    }

}


?>
