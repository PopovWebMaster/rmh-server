<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Models\Applications;
use App\Models\Company;
use App\Models\Category;



trait GetApplicationListTrait{

    public function GetApplicationList( $companyAlias ){

        $company = Company::where( 'alias', '=', $companyAlias )->first();
        $company_id = $company->id;

        $applications = Applications::where( 'company_id', '=', $company_id )
                                    ->orderBy( 'updated_at', 'desc' )
                                    ->get();

        $list = [];
        foreach( $applications as $model ){

            $category_id = $model->category_id;
            if( $category_id !== null ){
                $category = Category::find( $category_id );
                if( $category === null ){
                    $category_id = null;
                    $model->category_id = null;
                    $model->save();
                };
            };

            array_push( $list, [
                'id' =>     $model->id,
                'name' =>   $model->name,
                'num' =>    $model->num === null? '': $model->num,
                'notes' =>  $model->notes === null? '': $model->notes,
                'type' =>   $model->type,
                'category_id' => $category_id,
            ] );

        };

        return $list;
        
    }

}


?>

