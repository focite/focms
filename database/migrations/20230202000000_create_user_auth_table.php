<?php

use think\migration\Migrator;
use think\migration\db\Column;

return new class extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 认证表
        $table = $this->table('user_auth');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addColumn(Column::string('type')->setComment('凭证类型:username,email,wechat'))
            ->addColumn(Column::string('identifier')->setComment('唯一标识:如用户名,电子邮箱,openid'))
            ->addColumn(Column::string('credential')->setComment('凭证:密码或token'))
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
};
