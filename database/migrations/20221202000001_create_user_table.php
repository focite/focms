<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUserTable extends Migrator
{
    public function up()
    {
        // exp:  $table = $this->table('name', ['id' => false, 'primary_key' => ['user_id', 'follower_id']]);
        $table = $this->table('user', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户表']);
        $table->addColumn(Column::string('name')->setDefault('')->setComment('昵称'))
            ->addColumn(Column::string('avatar')->setDefault('')->setComment('头像'))
            ->addColumn(Column::date('birthday')->setComment('生日'))
            ->addColumn(Column::string('username')->setUnique()->setComment('登录用户名'))
            ->addColumn(Column::string('password')->setComment('登录用户密码'))
            ->addColumn(Column::string('password_salt')->setDefault('')->setComment('用户密码盐值'))
            ->addColumn(Column::string('remember_token')->setDefault('')->setComment('Remember Token'))
            ->addColumn(Column::string('reset_token')->setDefault('')->setComment('密码重置token'))
            ->addColumn(Column::unsignedInteger('is_admin')->setDefault(2)->setComment('是否为管理员:1是,2否'))
            ->addColumn(Column::unsignedInteger('status')->setDefault(1)->setComment('状态:1正常,2禁用'))
            ->addTimestamps()
            ->addSoftDelete()
            ->save();
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
