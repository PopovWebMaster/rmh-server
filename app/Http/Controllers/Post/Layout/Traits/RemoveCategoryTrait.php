<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateCategoryIdTrait;
use App\Http\Controllers\Post\Layout\Traits\GetCategoryListTrait;

// use App\Models\Company;
use App\Models\Category;



trait RemoveCategoryTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateCategoryIdTrait;
    use GetCategoryListTrait;

    public function RemoveCategory( $request, $user ){

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
                // $result[ 'ok' ] = true;
                $result['data'] = $request['data'];

                $categoryId = isset( $request['data']['categoryId'] )? $request['data']['categoryId']: null;

                $validateCategoryId = $this->ValidateCategoryId( $categoryId );

                if( $validateCategoryId[ 'fails' ] ){
                    $result[ 'message' ] = $validateCategoryId[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;

                    // $company = Company::where( 'alias', '=', $companyAlias )->first();
                    // $company_id = $company->id;

                    $category = Category::find( $categoryId );
                    $category->delete();

                    $result[ 'list' ] = $this->GetCategoryList( $companyAlias );

                };

                
            };

        };

        return $result;
        
    }

}


?>

