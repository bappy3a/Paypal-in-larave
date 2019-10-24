<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
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

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'paypal' => [
        'client_id' => 'AVBjWIBr73bls6F7-2s_PF2fKEz_TpFgbUxnfA-BJAD1Ie2blqXXrjvF6HcwaGe_E7Qau3EeWw9gR08P',
        'secret' => 'EHTpHd1glz7V1yFPc8rJ3egxeWJioAkEvbs9Iv6_1idpgRbQy6YUNAPoS3-BDnWZNpICNbxHrdRqOoGA'
    ],

];
