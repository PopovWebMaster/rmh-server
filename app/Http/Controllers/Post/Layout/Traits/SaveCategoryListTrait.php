<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use Validator;
use Illuminate\Validation\Rule;

use Storage;

use App\Models\KeyPoints;
use App\Models\Company;


trait SaveCategoryListTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;

    public function SaveCategoryList( $request, $user ){

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
                $result[ 'data' ] =  $request['data'];
                // $list = $request['data']['list'];

                // $company = Company::where( 'alias', '=', $companyAlias )->first();
                // $company_id = $company->id;

                // $keyPoints = KeyPoints::where('company_id', '=', $company_id)->get();
                // $keyPoints->map->delete();

                // for( $i = 0; $i < count( $list ); $i++ ){
                //     $dayNum =       $list[ $i ][ 'dayNum' ];
                //     $description =  $list[ $i ][ 'description' ];
                //     $ms =           $list[ $i ][ 'ms' ];
                //     $time =         $list[ $i ][ 'time' ];

                //     $KeyPoints = new KeyPoints;
                //     $KeyPoints->company_id = $company_id;
                //     $KeyPoints->dayNum = $dayNum;
                //     $KeyPoints->time = $time;
                //     $KeyPoints->description = $description;
                //     $KeyPoints->ms = $ms;
                //     $KeyPoints->save();
                // };
                
            };

        };

        return $result;
        
    }

}


?>

