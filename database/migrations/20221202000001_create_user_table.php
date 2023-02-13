<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUserTable extends Migrator
{
    public function up()
    {
        // exp:  $table = $this->table('name', ['id' => false, 'primary_key' => ['user_id', 'follower_id']]);
        $table = $this->table('user', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户表']);
        $table->addColumn(Column::string('name')->setComment('昵称'))
            ->addColumn(Column::string('avatar')->setComment('头像'))
            ->addColumn(Column::date('birthday')->setComment('生日'))
            ->addColumn(Column::string('username')->setUnique()->setComment('登录用户名'))
            ->addColumn(Column::string('password')->setComment('登录用户密码'))
            ->addColumn(Column::string('password_salt')->setComment('用户密码盐值'))
            ->addColumn(Column::string('remember_token')->setComment('Remember Token'))
            ->addColumn(Column::string('reset_token')->setComment('密码重置token'))
            ->addColumn(Column::string('email')->setUnique()->setComment('电子邮箱'))
            ->addColumn(Column::dateTime('email_verified_time')->setNullable()->setComment('电子邮箱验证时间'))
            ->addColumn(Column::string('mobile')->setUnique()->setComment('手机号码'))
            ->addColumn(Column::dateTime('mobile_verified_time')->setNullable()->setComment('手机号码验证时间'))
            ->addColumn(Column::unsignedInteger('is_admin')->setDefault(2)->setComment('是否为管理员：1是，2否'))
            ->addColumn(Column::unsignedInteger('status')->setComment('状态：1正常，2禁用'))
            ->addTimestamps()
            ->addSoftDelete()
            ->save();
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
