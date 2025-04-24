<?php 

namespace App\Http\Controllers\Post\Layout\Traits;

use App\Http\Controllers\Traits\UserData\GetUserDataTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateOneCategoryTrait;
use App\Http\Controllers\Post\Layout\Traits\GetCategoryListTrait;

// use Validator;
// use Illuminate\Validation\Rule;

// use Storage;

// use App\Models\KeyPoints;
use App\Models\Company;
use App\Models\Category;


trait SaveCategoryListTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateOneCategoryTrait;
    use GetCategoryListTrait;

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

                $list =  $request['data']['list'];

                $company = Company::where( 'alias', '=', $companyAlias )->first();
                $company_id = $company->id;

                for( $i = 0; $i < count( $list ); $i++ ){

                    $categoryId =        $list[ $i ][ 'id' ];
                    $categoryName =      $list[ $i ][ 'name' ];
                    $categoryPrefix =    $list[ $i ][ 'prefix' ];
                    $categoryColorText = $list[ $i ][ 'colorText' ];
                    $categoryColorBG =   $list[ $i ][ 'colorBG' ];

                    $validate = $this->ValidateOneCategory([
                        'categoryName' =>       $categoryName,
                        'categoryPrefix' =>     $categoryPrefix,
                        'categoryColorText' =>  $categoryColorText,
                        'categoryColorBG' =>    $categoryColorBG,
                    ]);

                    $result[ 'message' ] = [];

                    if( $validate[ 'fails' ] ){
                        array_push( $result[ 'message' ], $validate[ 'message' ]);
                    }else{
                        $category = Category::find( $categoryId );
                        if( $category !== null  ){

                            $category->name =       $categoryName;
                            $category->prefix =     $categoryPrefix;
                            $category->colorText =  $categoryColorText;
                            $category->colorBG =    $categoryColorBG;
                            $category->save();
                        };
                    };

                };

                $result[ 'list' ] = $this->GetCategoryList( $companyAlias );
                // $result[ 'list' ] = $list;


                

                
            };

        };

        return $result;
        
    }

}


?>

