<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
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

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'gitlab' => [
        'client_id' => env('GITLAB_CLIENT_ID'),
        'client_secret' => env('GITLAB_CLIENT_SECRET'),
        'redirect' => 'http://localhost:8000/login/gitlab/callback',
    ],

    'bitbucket' => [
        'client_id' => '81tmgcyl2i3e52',
        'client_secret' => '1WMGP0Ios7m5mERy',
        'redirect' => 'http://localhost:8000/login/bitbucket/callback',
    ],

    'facebook' => [
        'client_id' => '318737475457806',         // Your facebook Client ID
        'client_secret' => '0738f34736debf914513dfedd18804b0', // Your facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '53pUtKIUMVI7ULt0vNXql6nJp',
        'client_secret' => 'dJ3wMvUUOkW4bPB1fw12NkGFcg6509W1big2oaLIRPW0cYM8RB',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],
    
    'github' => [
        'client_id' => 'f189f1f9f5a4fdb54079',         // Your github Client ID
        'client_secret' => 'd8b4260d593458bf2b77bfe21ad2626ca63f2049', // Your github Client Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],
    'linkedin' => [
        'client_id' => '81tmgcyl2i3e52',         // Your linkedin Client ID
        'client_secret' => '1WMGP0Ios7m5mERy', // Your linkedin Client Secret
        'redirect' => 'http://localhost:8000/login/linkedin/callback',
    ],
    'google' => [
        'client_id' => '374239715720-bp44snsihnqett4ua1drcn4d6vo7hblr.apps.googleusercontent.com',         // Your google Client ID
        'client_secret' => '2xV73ZAjO48PN4ssxiRjZc0Q', // Your google Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
