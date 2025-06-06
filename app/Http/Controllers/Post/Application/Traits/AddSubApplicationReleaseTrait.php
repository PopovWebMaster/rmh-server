<?php 

namespace App\Http\Controllers\Post\Application\Traits;

use App\Http\Controllers\Traits\ValidateData\ValidateCompanyAliasTrait;
use App\Http\Controllers\Traits\ValidateAccessRight\ValidateAccessRightCompanyAffiliationTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateSubApplicationReleaseTrait;

use App\Http\Controllers\Post\Application\Traits\GetApplicationListTrait;
use App\Http\Controllers\Post\Application\Traits\GetOneApplicationDataTrait;
use App\Http\Controllers\Traits\ValidateData\ValidateApplicationDataTrait;

use App\Models\Application;
use App\Models\Company;
use App\Models\SubApplication;

trait AddSubApplicationReleaseTrait{

    use ValidateCompanyAliasTrait;
    use ValidateAccessRightCompanyAffiliationTrait;
    use ValidateSubApplicationReleaseTrait;
    use GetApplicationListTrait;
    use GetOneApplicationDataTrait;
    use ValidateApplicationDataTrait;

    public function AddSubApplicationRelease( $request, $user ){
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

                $applicationName =          isset( $request['data']['applicationName'] )?           $request['data']['applicationName']: null;
                $applicationCategoryId =    isset( $request['data']['applicationCategoryId'] )?     $request['data']['applicationCategoryId']: null;
                $applicationNum =           isset( $request['data']['applicationNum'] )?            $request['data']['applicationNum']: null;
                $applicationManagerNotes =  isset( $request['data']['applicationManagerNotes'] )?   $request['data']['applicationManagerNotes']: null;

                $name =             isset( $request['data']['name'] )?          $request['data']['name']: null;
                $periodFrom =       isset( $request['data']['periodFrom'] )?    $request['data']['periodFrom']: null;
                $periodTo =         isset( $request['data']['periodTo'] )?      $request['data']['periodTo']: null;
                $durationSec =      isset( $request['data']['durationSec'] )?   $request['data']['durationSec']: null;
                $airNotes =         isset( $request['data']['airNotes'] )?      $request['data']['airNotes']: null;

                $validate = $this->ValidateSubApplicationRelease([
                    'applicationId' =>  $applicationId,
                    'name' =>           $name,
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
                        $result[ 'message' ] = 'иди нахуй';
                    }else{
                        $result[ 'ok' ] = true;
                        // $result['data'] = $request['data'];

                        $validateApp = $this->ValidateApplicationData([
                            'applicationId' =>              $applicationId,
                            'applicationName' =>            $applicationName,
                            'applicationCategoryId' =>      $applicationCategoryId,
                            'applicationNum' =>             $applicationNum,
                            'applicationManagerNotes' =>    $applicationManagerNotes,
                        ]);

                        if( $validateApp[ 'fails' ] ){

                        }else{
                            $application->category_id =     $applicationCategoryId;
                            $application->name =            $applicationName;
                            $application->num =             $applicationNum;
                            $application->manager_notes =   $applicationManagerNotes;
                            $application->save();
                        };



                        $subApplication = new SubApplication;
                        $subApplication->application_id =   $applicationId;
                        $subApplication->period_from =      $periodFrom;
                        $subApplication->period_to =        $periodTo;
                        $subApplication->duration_sec =     $durationSec;
                        $subApplication->name =             $name;
                        $subApplication->air_notes =        $airNotes;
                        $subApplication->type =             'release';

                        $subApplication->save();

                        $result[ 'application' ] = $this->GetOneApplicationData( $applicationId );
                        $result[ 'applicationList' ] = $this->GetApplicationList( $companyAlias );

                    };

                };
            };
        };

        return $result;
    }

}


?>

