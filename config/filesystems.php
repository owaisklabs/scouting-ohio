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
            'url' => env('APP_URL').'/storage',
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

        // logos
        'public_logos' => [
            'driver' => 'local',
            'root' => public_path('img/logos'),
        ],

        // banners
        'public_banners' => [
            'driver' => 'local',
            'root' => public_path('img/banners'),
        ],

        // articles
        'public_articles' => [
            'driver' => 'local',
            'root' => public_path('img/articles'),
        ],
        //Video
        'public_videos' => [
            'driver' => 'local',
            'root' => public_path('img/videos'),
        ],

        'public_academic_info' => [
            'driver' => 'local',
            'root' => public_path('academic_info'),
        ],

        'public_user_img' => [
            'driver' => 'local',
            'root' => public_path('user_image'),
        ],

        // brands
        'public_brands' => [
            'driver' => 'local',
            'root' => public_path('img/brands'),
        ],

        // thumbnails
        'public_thumbnails' => [
            'driver' => 'local',
            'root' => public_path('img/thumbnails'),
        ],

        // users
        'public_users' => [
            'driver' => 'local',
            'root' => public_path('img/users'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
