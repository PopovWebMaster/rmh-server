<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Models\SubApplication;

trait GetSubApplicationListTrait{

    public function GetSubApplicationList( $application_id ){

        $result = [];

        $subApplications = SubApplication::where( 'application_id', '=', $application_id )->get();

        if( $subApplications !== null ){

            foreach( $subApplications as $model_2 ){

                array_push( $result, [
                    'id' =>             $model_2->id,
                    'application_id' => $model_2->application_id,
                    'period_from' =>    $model_2->period_from,
                    'period_to' =>      $model_2->period_to,
                    'duration_sec' =>   $model_2->duration_sec,
                    'name' =>           $model_2->name,
                    'serial_num' =>     $model_2->serial_num,
                    'air_notes' =>      $model_2->air_notes,
                    'type' =>           $model_2->type,
                ] );

            };

        };

        return $result;

    }

}


?>

