<?php

class Model_User extends \Orm\Model
{
    protected static $_properties = [
        'id',
        'username',
        'password',
        'group' => [
            'replacement'  => 'selector.group',
        ],
        'email',
        'last_login',
        'login_hash',
        'profile_fields',
        'screen_name',
        'screen_name_kana',
        'phone1',
        'phone2',
        'phone3',
        'deleted_at' => [
            'format'    => ['format_date' => '%Y/%m/%d %H:%M:%S'],
        ],
        'created_at' => [
            'format'    => ['format_date' => '%Y/%m/%d %H:%M:%S'],
        ],
        'updated_at' => [
            'format'    => ['format_date' => '%Y/%m/%d %H:%M:%S'],
        ],
    ];

    protected static $_observers = [
        'Orm\Observer_CreatedAt' => [
            'events' => ['before_insert'],
            'mysql_timestamp' => false,
        ],
        'Orm\Observer_UpdatedAt' => [
            'events' => ['before_update'],
            'mysql_timestamp' => false,
        ],
        'Funaffect\Observer_Format' => [
            'events' => ['after_save', 'after_load'],
        ],
        'Funaffect\Observer_Replacement' => [
            'events' => ['after_save', 'after_load'],
        ],
    ];

    // protected static $_has_many = [];

    protected static $_table_name = 'users';

}
