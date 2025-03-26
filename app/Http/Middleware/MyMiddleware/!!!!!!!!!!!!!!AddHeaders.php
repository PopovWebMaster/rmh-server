<?php

namespace App\Http\Middleware\MyMiddleware;

use Closure;

class AddHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
        
    //     // $req = $next($request);

    
    //     return $next($request)
    //         ->header('Access-Control-Allow-Origin', '*')
    //         ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
    //         ->header('Access-Control-Allow-Headers', 'Accept,Content-Type,Authorization');


    // }


    public function handle($request, Closure $next)
    {

        $GLOBALS['b'] = $request->path();

        $str = $request->path();

        $list_of_exceptions = [
            'api/download-34gYjh5peRts67Lm',
            'api/download-file',
        ];

        $issetMath = false;
        foreach( $list_of_exceptions as $value ){
            $find = strpos( $str, $value );
            if( $find !== false ){
                $issetMath = true;
                break;
            };
            
        };
        
        if( $issetMath ){
            return $next($request);
        }else{
            return $next($request)
                ->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers', 'Accept,Content-Type,Authorization');



        };
                                        

        


    }




}
