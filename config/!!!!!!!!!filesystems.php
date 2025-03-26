<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            // 'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
        ],

        
        'assets_css' => [
            'driver' => 'local',
            'root' => public_path('assets/css'),
            'visibility' => 'public',
        ],

        'assets_js' => [
            'driver' => 'local',
            'root' => public_path('assets/js'),
            'visibility' => 'public',
        ],

        'App_css' => [
            'driver' => 'local',
            'root' => public_path('assets/app/css'),
            'visibility' => 'public',
        ],

        'App_js' => [
            'driver' => 'local',
            'root' => public_path('assets/app/js'),
            'visibility' => 'public',
        ],


        'applications_integration' => [
            'driver' => 'local',
            'root' => public_path('assets/applications/integration'),
            'visibility' => 'public',
        ],


        'preview' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/preview/'),
            'visibility' => 'public',
            // 'visibility' => 'private',


            
        ],

        'product_buffer' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/product_buffer/'),
            'visibility' => 'public',
        ],

        'preview_buffer' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/preview_buffer/'),
            'visibility' => 'public',
        ],

        'product_preview' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/product-preview/'),
            'visibility' => 'public',
        ],

        'product_files' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/product_files/'),
            'visibility' => 'public',
        ],


        
        'admin_info' => [
            'driver' => 'local',
            'root'   => storage_path('app/private/admin_info/'),
            'visibility' => 'private',
        ],

        'convert' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/convert/'),
            'visibility' => 'public',
        ],

        'layout_sheet' => [
            'driver' => 'local',
            'root'   => storage_path('app/public/layout_sheet/'),
            'visibility' => 'public',
        ],











            //Не удалять, может понадобиться

        // 'assets_fonts' => [
        //     'driver' => 'local',
        //     'root' => public_path('assets/fonts'),
        //     'visibility' => 'public',
        // ],

        // 'assets_img' => [
        //     'driver' => 'local',
        //     'root' => public_path('assets/img'),
        //     'visibility' => 'public',
        // ],


    ],

];
