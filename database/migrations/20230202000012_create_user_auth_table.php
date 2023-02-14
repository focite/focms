<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUserAuthTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('user_auth', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户认证表']);
        $table->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addColumn(Column::string('type')->setComment('凭证类型:mobile,email,wechat'))
            ->addColumn(Column::string('identifier')->setUnique()->setComment('唯一标识:如手机号码,电子邮箱,openid'))
            ->addColumn(Column::string('credential')->setComment('凭证:密码或token'))
            ->addColumn(Column::dateTime('verified_time')->setNullable()->setComment('验证时间'))
            ->addColumn(Column::unsignedInteger('status')->setDefault(1)->setComment('状态:1正常,2禁用'))
            ->addTimestamps()
            ->addSoftDelete()
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('user_auth');
    }
}
