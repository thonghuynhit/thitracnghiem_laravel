<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
        'thisinh_ds' => [
            'driver' => 'session',
            'provider' => 'thisinh_ds',
        ],
        'thisinh_ds-api' => [
            'driver' => 'token',
            'provider' => 'thisinh_ds',
            'hash' => false,
        ],
        'admin_ds' => [
            'driver' => 'session',
            'provider' => 'admin_ds',
        ],
        'admin_ds-api' => [
            'driver' => 'token',
            'provider' => 'admin_ds',
            'hash' => false,
        ],
        'nguoirade_ds' => [
            'driver' => 'session',
            'provider' => 'nguoirade_ds',
        ],
        'nguoirade_ds-api' => [
            'driver' => 'token',
            'provider' => 'nguoirade_ds',
            'hash' => false,
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
        'thisinh_ds' => [
            'driver' => 'eloquent',
            'model' => App\thisinh_ds::class,
        ],
        'admin_ds' => [
            'driver' => 'eloquent',
            'model' => App\admin_ds::class,
        ],
        'nguoirade_ds' => [
            'driver' => 'eloquent',
            'model' => App\nguoirade_ds::class,
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'thisinh_ds' => [
            'provider' => 'thisinh_ds',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'admin_ds' => [
            'provider' => 'admin_ds',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'nguoirade_ds' => [
            'provider' => 'nguoirade_ds',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
