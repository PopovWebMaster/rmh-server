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



trait AddNewCategoryTrait{

    use GetUserDataTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateCompanyAliasTrait;
    use ValidateOneCategoryTrait;
    use GetCategoryListTrait;

    public function AddNewCategory( $request, $user ){

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
                // $result['data'] = $request['data'];

                $validateOneCategory = $this->ValidateOneCategory([
                    'categoryName' =>       isset( $request['data']['categoryName'] )?      $request['data']['categoryName']: null,
                    'categoryPrefix' =>     isset( $request['data']['categoryPrefix'] )?    $request['data']['categoryPrefix']: null,
                    'categoryColorText' =>  isset( $request['data']['categoryColorText'] )? $request['data']['categoryColorText']: null,
                    'categoryColorBG' =>    isset( $request['data']['categoryColorBG'] )?   $request['data']['categoryColorBG']: null,
                ]);

                if( $validateOneCategory[ 'fails' ] ){
                    $result[ 'message' ] = $validateOneCategory[ 'message' ];
                }else{
                    $result[ 'ok' ] = true;

                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $category = new Category;
                    $category->company_id = $company_id;
                    $category->name =       $request['data']['categoryName'];
                    $category->prefix =     $request['data']['categoryPrefix'];
                    $category->colorText =  $request['data']['categoryColorText'];
                    $category->colorBG =    $request['data']['categoryColorBG'];
                    $category->save();

                    $result[ 'list' ] = $this->GetCategoryList( $companyAlias );

                };



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

