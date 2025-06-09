<?php 

namespace App\Http\Controllers\Post\Admin\Traits;


use App\Models\Company;
use App\Models\CompanyProgramSystem;
use App\Models\UserCompany;

use App\User;


trait RemoveCompanyByAliasTrait{

    public function RemoveCompanyByAlias( $companyAlias ){

        $company = Company::where( 'alias', '=', $companyAlias )->first();

        if( $company !== null ){

            $company_id = $company->id;
            $companyProgramSystem = CompanyProgramSystem::where( 'company_id', '=', $company_id )->first();

            if( $companyProgramSystem !== null ){
                $companyProgramSystem->delete();
            };

            $userCompany = UserCompany::where( 'company_id', '=', $company_id )->get();
            if( count( $userCompany ) > 0 ){
                $userCompany->map->delete();
            };

            $company->delete();

        };

    }

}


?>



