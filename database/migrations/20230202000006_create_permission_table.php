<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreatePermissionTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('permission', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '权限表']);
        $table->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级ID'))
            ->addColumn(Column::string('name')->setDefault('')->setComment('规则名称'))
            ->addColumn(Column::string('rule')->setUnique()->setComment('规则标识'))
            ->addColumn(Column::string('icon')->setDefault('')->setComment('ICON图标'))
            ->addColumn(Column::boolean('is_menu')->setDefault(2)->setComment('是否为管理菜单：1是,2否'))
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
        $this->dropTable('permission');
    }
}
