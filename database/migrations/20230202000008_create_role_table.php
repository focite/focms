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
        $table = $this->table('role', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户角色表']);
        $table->addColumn(Column::string('name')->setUnique()->setComment('角色名称'))
            ->addColumn(Column::string('description')->setDefault('')->setComment('角色描述'))
            ->addColumn(Column::unsignedInteger('sort')->setDefault(0)->setComment('排序'))
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
        $this->dropTable('role');
    }
}
