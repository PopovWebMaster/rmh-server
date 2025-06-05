<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateSubApplicationSeriesTrait;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;

use App\Models\Application;
use App\Models\Company;

use App\Models\SubApplication;

use App\Http\Controllers\Post\Application\Traits\GetOneApplicationDataTrait;

trait AddSubApplicationSeriesTrait{

    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateSubApplicationSeriesTrait;
    use GetApplicationListTrait;

    use GetOneApplicationDataTrait;

    public function AddSubApplicationSeries( $request, $user ){
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

                $applicationId =    isset( $request['data']['applicationId'] )? $request['data']['applicationId']: null;
                $serialNumFrom =    isset( $request['data']['serialNumFrom'] )? $request['data']['serialNumFrom']: null;
                $serialNumTo =      isset( $request['data']['serialNumTo'] )?   $request['data']['serialNumTo']: null;
                $periodFrom =       isset( $request['data']['periodFrom'] )?    $request['data']['periodFrom']: null;
                $periodTo =         isset( $request['data']['periodTo'] )?      $request['data']['periodTo']: null;
                $durationSec =      isset( $request['data']['durationSec'] )?   $request['data']['durationSec']: null;
                $airNotes =         isset( $request['data']['airNotes'] )?      $request['data']['airNotes']: null;

                $validate = $this->ValidateSubApplicationSeries([
                    'applicationId' =>  $applicationId,
                    'serialNumFrom' =>  $serialNumFrom,
                    'serialNumTo' =>    $serialNumTo,
                    'periodFrom' =>     $periodFrom,
                    'periodTo' =>       $periodTo,
                    'durationSec' =>    $durationSec,
                    'airNotes' =>       $airNotes,
                ]);

                if( $validate[ 'fails' ] ){
                    $result[ 'message' ] = $validate[ 'message' ];
                }else{

                    

                    $company = Company::where( 'alias', '=', $companyAlias )->first();
                    $company_id = $company->id;

                    $application = Application::where( 'company_id', '=', $company_id )->where( 'id', '=', $applicationId )->first();

                    if( $application === null ){
                        $result[ 'message' ] = 'Ох, что-то вы мудрите, батенька. Кончали б вы с этим';
                    }else{
                        $result[ 'ok' ] = true;

                        $result['data'] = $request['data'];

                        for( $i = $serialNumFrom; $i < $serialNumTo + 1; $i++ ){
                            $subApplication = new SubApplication;

                            $subApplication->application_id =   $applicationId;
                            $subApplication->period_from =      $periodFrom;
                            $subApplication->period_to =        $periodTo;
                            $subApplication->duration_sec =     $durationSec;
                            $subApplication->serial_num =       $i;
                            $subApplication->name =             'Серия - '.$i;
                            $subApplication->air_notes =        $airNotes;
                            $subApplication->type =             'series';

                            $subApplication->save();
                        };

                        // $result[ 'list' ] = $this->GetApplicationList( $companyAlias );
                        $result[ 'application' ] = $this->GetOneApplicationData( $applicationId );

                    };

                };
            };
        };

        return $result;
    }

}


?>

