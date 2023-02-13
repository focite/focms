<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateRolePermissionRelationTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 管理员角色关联表
        $table = $this->table('role_permission_relation');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('role_id')->setComment('角色ID'))
            ->addColumn(Column::unsignedInteger('permission_id')->setComment('权限ID'))
            ->addIndex(['role_id', 'permission_id'], true)
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTable('role_permission_relation');
    }
}
