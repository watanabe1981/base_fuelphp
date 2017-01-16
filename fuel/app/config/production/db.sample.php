<?php

return [
    'default' => [
        'type' => 'mysqli',
        'connection'  => [
            'username'   => 'xxxxxx',
            'password'   => 'xxxxxx!',
            'port'       => '3306',
            'hostname'   => 'xxx.xxx.xxx.xxx',
            'database'   => 'fuelsample',
            'persistent' => true,
            'compress'   => true,
        ],
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling'    => false,
        'table_prefix' => 'prod_',
    ],
];