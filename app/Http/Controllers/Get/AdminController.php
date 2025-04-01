<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use App\Models\Company;
use App\Models\UserCompany;
use App\Models\CompanyProgramSystem;




use Auth;

class AdminController extends SiteController
{
    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');

        
    }

    function get( Request $request ){

        // dd( $request );

        
        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Админка';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['companyType'] = 'tv';
        $this->data['page'] = 'admin';



/*
        $companyProgramSystem_1resp = new CompanyProgramSystem;
        $companyProgramSystem_1resp->company_id = 1;
        $companyProgramSystem_1resp->name = 'Forward-TA';
        $companyProgramSystem_1resp->save();

        $companyProgramSystem_oplot = new CompanyProgramSystem;
        $companyProgramSystem_oplot->company_id = 1;
        $companyProgramSystem_oplot->name = 'Forward-TA';
        $companyProgramSystem_oplot->save();
*/












        
   /*     
        $company = new Company;
        $company->name = 'Первый республиканский';
        $company->alias = '1-resp';
        $company->type = 'tv';

        $company->save();

        $company_2 = new Company;
        $company_2->name = 'Оплот';
        $company_2->alias = 'oplot';
        $company_2->type = 'tv';

        $company_2->save();

        dd('11');
*/

/*
        $user_company = new UserCompany;
        $user_company->user_id = 1;
        $user_company->company_id = 1;
        $user_company->save();

        $user_company_2 = new UserCompany;
        $user_company_2->user_id = 1;
        $user_company_2->company_id = 2;
        $user_company_2->save();

        $user_company_3 = new UserCompany;
        $user_company_3->user_id = 2;
        $user_company_3->company_id = 2;
        $user_company_3->save();
*/


        // User::create([
        //     'name' => 'Vasiliy',
        //     'email' => 'vasya@mail.ru',
        //     'password' => bcrypt('111222333'),
        // ]);







        // User::create([
        //     'name' => 'Alex',
        //     'email' => 'aaa@mail.ru',
        //     'password' => bcrypt('111222333'),
        // ]);

        // $user = User::where( 'email', '=', 'aaa@mail.ru' )->first();

        // Auth::login($user);
        // Auth::logout();





        // $user = new User;

        // $user->
        // 'name', 'email', 'password',


        // Auth::attempt([
        //     'email' => 'aaa@mail.ru',
        //     'password' => '111222333',

        // ], true );

        // Auth::attempt([
        //     'email' => 'vasya@mail.ru',
        //     'password' => '111222333',

        // ], true);



        // dd( Auth::check() );

        // return redirect()->route( 'login' );


        // dd( $this->data );
        
        return view( 'admin', $this->data );

    }
}
