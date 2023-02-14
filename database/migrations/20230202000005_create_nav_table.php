<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateNavTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('nav', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '导航表']);
        $table->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级ID'))
            ->addColumn(Column::enum('type', ['top', 'middle', 'bottom'])->setDefault('middle')->setComment('导航类型'))
            ->addColumn(Column::string('name')->setComment('导航文字'))
            ->addColumn(Column::string('description')->setDefault('')->setComment('导航描述'))
            ->addColumn(Column::string('icon')->setDefault('')->setComment('小图标'))
            ->addColumn(Column::string('link')->setDefault('')->setComment('链接地址'))
            ->addColumn(Column::enum('target', ['_self', '_blank', '_top'])->setDefault('_self')->setComment('打开方式'))
            ->addColumn(Column::unsignedInteger('sort')->setDefault(0)->setComment('排序'))
            ->addColumn(Column::unsignedInteger('status')->setDefault(1)->setComment('状态:1正常,2禁用'))
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
        $this->dropTable('nav');
    }
}
