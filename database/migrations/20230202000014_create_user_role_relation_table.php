<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUserRoleRelationTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 用户角色关联表
        $table = $this->table('user_role_relation');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addColumn(Column::unsignedInteger('role_id')->setComment('角色ID'))
            ->addIndex(['user_id', 'role_id'], true)
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('user_role_relation');
    }
}
