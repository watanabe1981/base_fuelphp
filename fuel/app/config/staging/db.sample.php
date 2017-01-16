<?php
return array(
    'default' => array(
        'type' => 'mysqli',
        'connection'  => array(
            'username'   => 'xxxxxx',
            'password'   => 'xxxxxx!',
            'port'       => '3306',
            'hostname'   => 'localhost',
            'database'   => 'fuelsample',
            'persistent' => false,
            'compress'   => true,
        ),
        'charset'      => 'utf8',
        'enable_cache' => true,
        'profiling'    => true,
        'table_prefix' => 'stg_',
    ),
);