<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    //'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                    'clientId' => '727172787717007',
                    'clientSecret' => '302a4a07e3314a30acbe6a47fe0f4315',
                    'attributeNames' => ['name', 'email', 'first_name', 'last_name'],
                ],
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    //'authUrl' => 'https://www.google.com/dialog/oauth?display=popup',
                    'clientId' => '901744311637-qvd1l9445ha7hnee1769qt6ijfsdfb8e.apps.googleusercontent.com',
                    'clientSecret' => '5VsYMkUnAuyztbKYBk6qAU-2',
                    // 'attributeNames' => ['name', 'email', 'first_name', 'last_name'],
                ],
            ],
        ]
    ],
];
