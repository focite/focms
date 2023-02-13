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
        //
        $table = $this->table('role_permission_relation', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '用户角色关联表']);
        $table->addColumn(Column::unsignedInteger('role_id')->setComment('角色ID'))
            ->addColumn(Column::unsignedInteger('permission_id')->setComment('权限ID'))
            ->addIndex(['role_id', 'permission_id'], ['unique' => true])
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
