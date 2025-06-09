<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\SiteController;

use App\User;

use App\Models\Company;
use App\Models\UserCompany;
use App\Models\CompanyProgramSystem;

use App\Http\Controllers\Post\Admin\Traits\AddNewCompanyTvTrait;
use App\Http\Controllers\Post\Admin\Traits\RemoveCompanyByAliasTrait;
use App\Http\Controllers\Post\Admin\Traits\AddNewUserTrait;




    
use Auth;

use Artisan;

class AdminController extends SiteController
{
    use AddNewCompanyTvTrait;
    use RemoveCompanyByAliasTrait;
    use AddNewUserTrait;

    public function __construct(){
        parent::__construct();
        // $this->middleware('auth');
        
    }

    function get( Request $request ){

        $this->data['robots'] = 'noindex';
        $this->data['pageTitle'] = 'Админка';
        $this->data['companyAlias'] = config( 'company.list.1_resp.alias' );
        $this->data['companyName'] = config( 'company.list.1_resp.name' );
        $this->data['companyType'] = 'tv';
        $this->data['page'] = 'admin';


        // Artisan::call('cache:clear');
        // Artisan::call('config:cache');
        // Artisan::call('view:clear');
        // Artisan::call('route:clear');
        // Artisan::call('storage:link');
        // Artisan::call('migrate');
        // Artisan::call('db:seed');



        // $this->AddNewCompanyTv([
        //     'companyFullName' => 'Первый мариупольский ТВ',
        //     'companyAlias' => 'first-marik-tv',
        // ]);

        // $this->RemoveCompanyByAlias( 'first-marik-tv' );


        // $this->AddNewUser([
        //     'name' => 'Vas',
        //     'email' => 'vas@mail.ru',
        //     'password' => '111222333',
        //     'companyAlias' => 'first-marik-tv',
        // ]);


        // User::create([
        //     'name' => 'Alex',
        //     'email' => 'aaa@mail.ru',
        //     'password' => bcrypt('111222333'),
        // ]);


        dd('finish');

        return view( 'admin', $this->data );

    }
}
