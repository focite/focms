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
        // 权限表
        $table = $this->table('permission');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级ID'))
            ->addColumn(Column::string('name')->setDefault('')->setComment('规则名称'))
            ->addColumn(Column::string('rule')->setUnique()->setComment('规则标识'))
            ->addColumn(Column::string('icon')->setDefault('')->setComment('ICON图标'))
            ->addColumn(Column::boolean('is_menu')->setDefault(0)->setComment('是否为管理菜单'))
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
        $this->dropTable('permission');
    }
}
