<?php
/*
    |--------------------------------------------------------------------------
    | Setup your google recaptcha keys
    |--------------------------------------------------------------------------
    |
    | You can set use of google recaptcha by setting use to true.
    | Please set MAIL_TO_ADDRESS and MAIL_FROM_ADDRESS inside your .env file.
    |
    */
return [
    'route' => [
        'prefix' => 'feedback',
        'middleware' => ['web'],
    ],
    'recapthca' => [
        'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY', null),
        'secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY', null),
        'use' => true,
    ],
    'mail' => [
        'to' => [
            'address' => env('MAIL_TO_ADDRESS', 'hello@gmail.com'),
        ],
        'from' => [
            'address' => env('MAIL_FROM_ADDRESS', 'hello@gmail.com'),
        ],
    ],
];
