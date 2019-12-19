<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '398018616768-bldr5dfb5suuj0um4q7doqn9ta8d3o5l.apps.googleusercontent.com',
        'client_secret' => '79vN_ZCZOI0r9caq0tLGFJUT',
        'redirect' => 'http://localhost:8000/callback/google',
    ],
    
    'github' => [
        'client_id' => '418b4d973f76e2b89364',
        'client_secret' => 'a4aa44f952aabbddc3482d044ecfad8ccf43a383',
        'redirect' => 'http://localhost:8000/callback/github',
    ], 

];
