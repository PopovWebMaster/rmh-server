<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateNewApplicationTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateApplicationIdTrait;

use App\Models\Company;
use App\Models\Application;
// use App\Models\ApplicationSeries;
// use App\Models\ApplicationRelease;
// use App\Models\ApplicationReleaseSchedule;
// use App\Models\ApplicationSeriesSchedule;
use App\Models\Category;





trait GetApplicationDataTrait{

    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateNewApplicationTrait;
    use ValidateApplicationIdTrait;

    public function GetApplicationData( $request, $user ){
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

                $applicationId =  isset( $request['data']['applicationId'] )? $request['data']['applicationId']: null;

                $validate = $this->ValidateApplicationId( $applicationId );

                if( $validate[ 'fails' ] ){
                    $result[ 'message' ] = $validate[ 'message' ];
                }else{
                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $application = Application::where( 'company_id', '=', $company_id )->where( 'id', '=', $applicationId )->first();

                    if( $application === null ){
                        $result[ 'message' ] = 'Эх, что-то вы мудрите, мой дорогой друг, не надо так. Нет у вас прав доступа к заявкам этой компании.';
                    }else{
                        
                        $result[ 'ok' ] = true;

                        $application_id =   $application->id;
                        $category_id =      $application->category_id;
                        $manager_id =       $application->manager_id;
                        $name =             $application->name;
                        $num =              $application->num;
                        $manager_notes =    $application->manager_notes;

                        $categoryModel = Category::find( $category_id );
                        if( $categoryModel === null ){
                            $application->category_id = null;
                            $application->save();
                            $category_id = null;
                        };

                        $result[ 'application_id' ] =   $application_id;
                        $result[ 'category_id' ] =      $category_id;
                        $result[ 'manager_id' ] =       $manager_id;
                        $result[ 'name' ] =             $name;
                        $result[ 'num' ] =              $num;
                        $result[ 'manager_notes' ] =    $manager_notes;






                    };

                    // if( $application === null ){
                    //     
                    // }else{
                    //     // $result[ 'ok' ] = true;
                    //     // $result['data'] = $request['data'];



                    //     $applications_id =  $application->id;
                    //     $name =             $application->name;
                    //     $category_id =      $application->category_id;


                    //     $num =              isset( $application->num )? $application->num: '';
                    //     $type =             $application->type;
                    //     $notes =            isset( $application->notes )? $application->notes: '';
                    //     $name =             $application->name;

                    //     $categoryModel = Category::find( $category_id );
                    //     if( $categoryModel === null ){
                    //         $application->category_id = null;
                    //         $application->save();
                    //         $category_id = null;
                    //     };

                    //     $applications = [];

                    //     if( $type === 'series' ){
                    //         $result[ 'ok' ] = true;
                    //         $applications = $this->GetDataForSerials( $applications_id );


                    //     }else if( $type === 'release' ){
                    //         $result[ 'ok' ] = true;
                    //         $applications = $this->GetDataForRelease( $applications_id );

                    //     }else{
                    //         $result[ 'message' ] = 'Что-то не так с типом заявки. Текущий $type = '.$type;
                    //     };

                    //     $result[ 'application' ] = [
                    //         'name' =>           $name,
                    //         'category_id' =>    $category_id,
                    //         'num' =>            $num,
                    //         'type' =>           $type,
                    //         'notes' =>          $notes,
                    //         'orders' =>         $applications,
                    //     ];

                    // };
                };

            };
        };

        return $result;
    }

    // private function GetDataForSerials( $applications_id ){

    //     $result = [];

    //     $applicationSeries = ApplicationSeries::where( 'applications_id', '=', $applications_id )->get();

    //     foreach( $applicationSeries as $model ){

    //         $application_series_id =    $model->id;

    //         $period_from =              $model->period_from;
    //         $period_to =                $model->period_to;
    //         $duration_sec =             $model->duration_sec;
    //         $serial_num =               $model->serial_num;
    //         $notes =                    isset( $model->notes )? $model->notes: '';
    //         $file_names_version_list =  isset( $model->file_names_version_list )? json_decode( $model->file_names_version_list, true ): [];

    //         $description =              isset( $model->description )? $model->description: '';
    //         $correct_file_name =        isset( $model->correct_file_name )? $model->correct_file_name: '';

    //         array_push( $result, [
    //             'application_series_id' =>      $application_series_id,
    //             'period_from' =>                $period_from,
    //             'period_to' =>                  $period_to,
    //             'duration_sec' =>               $duration_sec,
    //             'serial_num' =>                 $serial_num,
    //             'notes' =>                      $notes,
    //             'file_names_version_list' =>    $file_names_version_list,
    //             'description' =>                $description,
    //             'correct_file_name' =>          $correct_file_name,
    //         ] );

    //     };


    //     return $result;
    // }

    // private function GetDataForRelease( $applications_id ){

    //     $result = [];

    //     $applicationRelease = ApplicationRelease::where( 'applications_id', '=', $applications_id )->get();

    //     foreach( $applicationRelease as $model ){

    //         $application_release_id =    $model->id;

    //         $period_from =              $model->period_from;
    //         $period_to =                $model->period_to;
    //         $duration_sec =             $model->duration_sec;
    //         $name =                     $model->name;
    //         $notes =                    isset( $model->notes )? $model->notes: '';
    //         $file_names_version_list =  isset( $model->file_names_version_list )? json_decode( $model->file_names_version_list, true ): [];
    //         $description =              isset( $model->description )? $model->description: '';
    //         $correct_file_name =        isset( $model->correct_file_name )? $model->correct_file_name: '';

    //         array_push( $result, [
    //             'application_release_id' =>     $application_release_id,
    //             'period_from' =>                $period_from,
    //             'period_to' =>                  $period_to,
    //             'duration_sec' =>               $duration_sec,
    //             'name' =>                       $name,
    //             'notes' =>                      $notes,
    //             'file_names_version_list' =>    $file_names_version_list,
    //             'description' =>                $description,
    //             'correct_file_name' =>          $correct_file_name,
    //         ] );

    //     };

    //     return $result;
    // }

}


?>


