<?php 

namespace App\Http\Controllers\Traits\UserData;

use App\User;
use App\Models\UserCompany;
use App\Models\Company;


trait GetUserDataTrait{

    public function GetUserData( $request, $user ){

        $user_id = $user->id;
        $user_name = $user->name;
        $user_email = $user->email;
        $user_position = '';

        if( config( 'app.admin_email' ) === $user_email ){
            $user_position = 'admin';
        };


        $companyAliasList = [];

        $userCompany = UserCompany::where( 'user_id', '=', $user_id )->get();

        foreach( $userCompany as $item ){
            $company_id = $item->company_id;
            $company = Company::find( $company_id );
            array_push( $companyAliasList, $company->alias );
        };

        $result = [
            'id' =>         $user_id,
            'name' =>       $user_name,
            'email' =>      $user_email,
            'position' =>   $user_position,
            'company' =>    $companyAliasList,

        ];

        return $result;
        
    }

}


?>

