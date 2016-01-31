<?php
return [
    'app' => [
        // Renderer settings

    ],
    'settings' => [
        'displayErrorDetails' => true,
        'renderer' => [
            'template_path' => __DIR__ . '/Views/',
        ],
        // Monolog settings
        'logger' => [
            'name' => 'api',
            'path' => __DIR__ . '/../../logs/api/'.date('Y-m-d').'.log',
        ],
    ],

    // database setting
    'database' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'app_bos',
            'username'  => 'fren',
            'password'  => 'wanna',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => 'bos_',
        ]
    ]
];
