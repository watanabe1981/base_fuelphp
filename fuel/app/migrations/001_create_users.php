<?php

namespace Fuel\Migrations;

class Create_users
{
    public function up()
    {
        \DBUtil::create_table('users', [
            'id'               => ['constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true],
            'username'         => ['constraint' => 50, 'type' => 'varchar'],
            'password'         => ['constraint' => 255, 'type' => 'varchar'],
            'group'            => ['constraint' => 11, 'type' => 'int'],
            'email'            => ['constraint' => 255, 'type' => 'varchar'],
            'last_login'       => ['constraint' => 25, 'type' => 'varchar'],
            'login_hash'       => ['constraint' => 255, 'type' => 'varchar'],
            'screen_name'      => ['constraint' => 50,  'type' => 'varchar', 'null' => true],
            'screen_name_kana' => ['constraint' => 255, 'type' => 'varchar', 'null' => true],
            'phone1'           => ['constraint' => 15,  'type' => 'varchar', 'null' => true],
            'phone2'           => ['constraint' => 15,  'type' => 'varchar', 'null' => true],
            'phone3'           => ['constraint' => 15,  'type' => 'varchar', 'null' => true],
            'profile_fields'   => ['type' => 'text'],
            'deleted_at'       => ['constraint' => 11, 'type' => 'int', 'null' => true],
            'created_at'       => ['constraint' => 11, 'type' => 'int'],
            'updated_at'       => ['constraint' => 11, 'type' => 'int', 'null' => true]
        ], ['id']);

        // 管理ユーザーの作成
        \Auth::create_user('admin', 'admin', 'hoge@funaffect.jp', 100);
    }

    public function down()
    {
        \DBUtil::drop_table('users');
    }
}
