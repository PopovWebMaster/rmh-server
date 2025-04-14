<?php 

namespace App\Http\Controllers\Post\PlayReport\Traits;

use Validator;
use Illuminate\Validation\Rule;

use App\User;
use Auth;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;

use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use Storage;


trait GetOneDayPlayReportListTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;

    public function GetOneDayPlayReportList( $request, $user ){

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

                // $date = $request[ 'data' ][ 'date' ];
                // $month = $request[ 'data' ][ 'month' ];
                // $year = $request[ 'data' ][ 'year' ];

                $date_string = $request[ 'data' ][ 'date_string' ];

                $result[ 'list' ] = [];
                
                // $file = $companyAlias.'/'.$year.'-'.$month.'-'.$date.'.json';
                $file = $companyAlias.'/'.$date_string.'.json';


                // $result[ 'file' ] = $file;

                if( Storage::disk('play_report')->exists( $file ) ){
                    $json = Storage::disk('play_report')->get( $file );
                    $result[ 'list' ] = json_decode( $json );
                };
 
            };

        };






        

        return $result;
        
    }

}


?>
