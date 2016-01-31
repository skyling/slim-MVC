<?php
return [
    'settings' => [
        'displayErrorDetails' => true,
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/Views/',
        ],
        // Monolog settings
        'logger' => [
            'name' => 'bos',
            'path' => __DIR__ . '/../../logs/app/'.date('Y-m-d').'.log',
        ],
    ],

    // database setting
    'database' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'app_bos',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix'    => 'bos_',
        ]
    ]
];
