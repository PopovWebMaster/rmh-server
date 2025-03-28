<?php 

namespace App\Http\Controllers\Post\Login\Traits;

use Validator;
use Illuminate\Validation\Rule;

trait LoginUserByPostTrait{

    public function LoginUserByPost( $request, $user ){

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

            if( $user !== null ){
                $result[ 'message' ] = 'Пользователь уже авторизирован. Ничего не делаю';
            }else{
                $result[ 'message' ] = 'Здесь должна быть авторизация';
            };
        };

        $result[ 'user' ] = $user;
        $result[ 'email' ] = $email;
        $result[ 'password' ] = $password;





        return $result;
        
    }

}


?>
