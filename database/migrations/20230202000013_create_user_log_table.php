<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUserLogTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('user_log', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户日志表']);
        $table->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
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
}
