<?php

namespace App\Http\Controllers\Get;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

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

        // User::create([
        //     'name' => 'Alex',
        //     'email' => 'aaa@mail.ru',
        //     'password' => bcrypt('111222333'),
        // ]);

        // $user = User::where( 'email', '=', 'aaa@mail.ru' )->first();

        // Auth::login($user);
        Auth::logout();





        // $user = new User;

        // $user->
        // 'name', 'email', 'password',


        // Auth::attempt([
        //     'email' => 'aaa@mail.ru',
        //     'password' => '111222333',

        // ], true);



        // dd( Auth::check() );

        // return redirect()->route( 'login' );


        // dd( $this->data );
        
        return view( 'admin', $this->data );

    }
}
