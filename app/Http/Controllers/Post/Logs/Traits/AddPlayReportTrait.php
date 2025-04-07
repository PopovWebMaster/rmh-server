<?php 

namespace App\Http\Controllers\Post\Logs\Traits;

use Validator;
use Illuminate\Validation\Rule;

use App\User;
use Auth;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use Storage;


trait AddPlayReportTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;

    public function AddPlayReport( $request, $user ){

        $result = [
            'ok' => false,
            'message' => '',
        ];

        $companyAlias = isset( $request['data']['companyAlias'] )? htmlspecialchars( $request['data']['companyAlias'] ): null;

        $validateCompanyAlias = $this->ValidateCompanyAlias( $companyAlias );

        if( $validateCompanyAlias[ 'fails' ] ){
            $result[ 'message' ] = $validateCompanyAlias[ 'message' ];

        }else{

            $validateAccessRight = $this->ValidateAccessRightCompanyAffiliation( $companyAlias, $user );

            if( $validateAccessRight[ 'fails' ] ){
                $result[ 'message' ] = $validateAccessRight[ 'message' ];
            }else{
                $result[ 'ok' ] = true;

                $json = json_encode( $request[ 'data' ][ 'list' ] , JSON_UNESCAPED_UNICODE );
                $puth = $companyAlias.'/'.$request[ 'data' ][ 'date' ].'.json';

                // json_decode

                if( Storage::disk('play_report')->exists( $puth ) ){
                    Storage::disk('play_report')->delete( $puth );
                };

                $disk = Storage::disk('play_report')->put( $puth, $json );



                
                

 
            };

        };






        

        return $result;
        
    }

}


?>
