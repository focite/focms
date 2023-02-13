<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateRoleTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 角色表
        $table = $this->table('role');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::string('title')->setDefault('')->setComment('角色名称'))
            ->addColumn(Column::unsignedInteger('status')->setDefault(1)->setComment('状态:1正常,2禁用'))
            ->addColumn(Column::unsignedInteger('sort')->setDefault(0)->setComment('排序'))
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
        $this->dropTable('role');
    }
}
