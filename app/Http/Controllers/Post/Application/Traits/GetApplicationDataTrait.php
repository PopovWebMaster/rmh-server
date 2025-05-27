<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateNewApplicationTrait;

use App\Http\Controllers\Traits\ValidateData\ValidateApplicationIdTrait;

use App\Models\Company;
use App\Models\Applications;
use App\Models\ApplicationSeries;
use App\Models\ApplicationRelease;
use App\Models\ApplicationReleaseSchedule;
use App\Models\ApplicationSeriesSchedule;

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

                $result[ 'ok' ] = true;
                $result['data'] = $request['data'];

                $validate = $this->ValidateApplicationId( $applicationId );

                if( $validate[ 'fails' ] ){
                    $result[ 'message' ] = $validate[ 'message' ];
                }else{
                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $application = Applications::where( 'company_id', '=', $company_id )->where( 'id', '=', $applicationId )->first();

                    if( $application === null ){
                        $result[ 'message' ] = 'Эх, что-то вы мудрите, мой дорогой друг, не надо так. Нет у вас прав доступа к заявкам этой компании.';
                    }else{
                        // $result[ 'ok' ] = true;
                        // $result['data'] = $request['data'];
                        $applications_id =  $application->id;
                        $name =             $application->name;
                        $category_id =      $application->category_id;
                        $num =              isset( $application->num )? $application->num: '';
                        $type =             $application->type;
                        $notes =            isset( $application->notes )? $application->notes: '';
                        $name =             $application->name;

                        $applications = [];

                        if( $type === 'series' ){
                            $result[ 'ok' ] = true;
                            $applications = $this->GetDataForSerials( $applications_id );


                        }else if( $type === 'release' ){
                            $result[ 'ok' ] = true;
                            $applications = $this->GetDataForRelease( $applications_id );

                        }else{
                            $result[ 'message' ] = 'Что-то не так с типом заявки. Текущий $type = '.$type;
                        };

                        $result[ 'application' ] = [
                            'name' =>           $name,
                            'category_id' =>    $category_id,
                            'num' =>            $num,
                            'type' =>           $type,
                            'notes' =>          $notes,
                            'orders' =>         $applications,
                        ];

                    };
                };

            };
        };

        return $result;
    }

    private function GetDataForSerials( $applications_id ){

        $result = [];

        $applicationSeries = ApplicationSeries::where( 'applications_id', '=', $applications_id )->get();

        foreach( $applicationSeries as $model ){

            $application_series_id =    $model->id;

            $time_from_sec =            $model->time_from_sec;
            $time_to_sec =              $model->time_to_sec;
            $duration_sec =             $model->duration_sec;
            $serial_num =               $model->serial_num;
            $notes =                    isset( $model->notes )? $model->notes: '';
            $file_names_version_list =  isset( $model->file_names_version_list )? json_decode( $model->file_names_version_list, true ): [];

            $schedule = [];

            $applicationSeriesSchedule = ApplicationSeriesSchedule::where( 'application_series_id', '=', $application_series_id )->get();

            foreach( $applicationSeriesSchedule as $model_2 ){

                $id =       $model_2->id;
                $day_sec =  $model_2->day_sec;
                $time_sec = $model_2->time_sec;

                array_push( $schedule, [
                    'id' =>         $id,
                    'day_sec' =>    $day_sec,
                    'time_sec' =>   $time_sec,
                ] );

            };

            /* 
                здесь должна быть сортировка $schedule
            */

            array_push( $result, [
                'application_series_id' =>      $application_series_id,
                'time_from_sec' =>              $time_from_sec,
                'duration_sec' =>               $duration_sec,
                'serial_num' =>                 $serial_num,
                'notes' =>                      $notes,
                'file_names_version_list' =>    $file_names_version_list,
                'schedule' =>                   $schedule,
            ] );

        };

        /* 
            здесь должна быть сортировка $result
        */


        return $result;
    }

    private function GetDataForRelease( $applications_id ){

        $result = [];

        $applicationRelease = ApplicationRelease::where( 'applications_id', '=', $applications_id )->get();

        foreach( $applicationRelease as $model ){

            $application_release_id =    $model->id;

            $time_from_sec =            $model->time_from_sec;
            $time_to_sec =              $model->time_to_sec;
            $duration_sec =             $model->duration_sec;
            $name =                     $model->name;
            $notes =                    isset( $model->notes )? $model->notes: '';
            $file_names_version_list =  isset( $model->file_names_version_list )? json_decode( $model->file_names_version_list, true ): [];

            $schedule = [];

            $applicationReleaseSchedule = ApplicationReleaseSchedule::where( 'application_release_id', '=', $application_release_id )->get();

            foreach( $applicationReleaseSchedule as $model_2 ){

                $id =       $model_2->id;
                $day_sec =  $model_2->day_sec;
                $time_sec = $model_2->time_sec;

                array_push( $schedule, [
                    'id' =>         $id,
                    'day_sec' =>    $day_sec,
                    'time_sec' =>   $time_sec,
                ] );

            };

            /* 
                здесь должна быть сортировка $schedule
            */

            array_push( $result, [
                'application_release_id' =>     $application_release_id,
                'time_from_sec' =>              $time_from_sec,
                'duration_sec' =>               $duration_sec,
                'name' =>                       $name,
                'notes' =>                      $notes,
                'file_names_version_list' =>    $file_names_version_list,
                'schedule' =>                   $schedule,
            ] );

        };

        /* 
            здесь должна быть сортировка $result
        */

        return $result;
    }

}


?>


