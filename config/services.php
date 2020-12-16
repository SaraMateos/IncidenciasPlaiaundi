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

    //Socialite
    'google' => [
        //Id suministrado por google
        'client_id' => env('GOOGLE_ID'),

        //Secret suministrado por google
        'client_secret' => env('GOOGLE_SECRET'),

        //Pagina a la que sera redireccionado el navegador cuando el login se exitoso
        //Ejemplo: http://midominio.com/social/handle/google
        'redirect' => env('GOOGLE_REDIRECT')
    ],

    //
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

];
