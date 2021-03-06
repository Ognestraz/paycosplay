<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY', 'SomeRandomString!!!'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => env('APP_LOCALE', 'en'),

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
    'admin_url' => 'admin',
    'image' => [
        'variants' => [
            'preview' => [
                ['fit' => ['width' => 320, 'height' => 180]]
            ],
            'large' => [
                ['resize' => ['width' => 1280, 'height' => 960]]
            ],
            'slider' => [
                ['fit-upsize' => ['width' => 640, 'height' => 360, 'k' => 0.45]]
            ]         
        ]
    ],
    'remote' => [
        'db' => [
            'database' => env('REMOTE_DB_DATABASE', ''),
            'username' => env('REMOTE_DB_USERNAME', ''),
            'password' => env('REMOTE_DB_PASSWORD', '')
        ]
    ]

];
