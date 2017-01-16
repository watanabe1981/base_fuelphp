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
            'persistent' => false,
            'compress'   => true,
        ],
        'charset'      => 'utf8',
        'enable_cache' => false,
        'profiling'    => true,
        'table_prefix' => 'sample_',
    ],
];