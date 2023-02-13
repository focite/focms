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
        // 日志表
        $table = $this->table('user_log');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addColumn(Column::string('content')->setComment('内容'))
            ->addColumn(Column::string('ip')->setComment('IP地址'))
            ->addColumn(Column::string('user_agent')->setComment('User Agent'))
            ->addTimestamps()
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('user_log');
    }
};
