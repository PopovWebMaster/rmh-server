<?php 

namespace App\Http\Controllers\Traits\ValidateAccessRight;

trait ValidateAccessRightAdminOnlyTrait{

    public function ValidateAccessRightAdminOnly( $request, $user ){

        $result = [
            'fails' => true,
            'message' => 'Закрыт доступ к странице',
        ];

        $user_email = $user->email;

        if( config( 'app.admin_email' ) === $user_email ){
            $result[ 'fails' ] = false;
            $result[ 'message' ] = '';

        };

        return $result;
        
    }

}


?>

