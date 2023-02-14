<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateContentTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('content', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '内容表']);
        $table->addColumn(Column::string('title')->setUnique()->setComment('标题'))
            ->addColumn(Column::string('keywords')->setDefault('')->setComment('关键词'))
            ->addColumn(Column::string('description')->setDefault('')->setComment('描述'))
            ->addColumn(Column::string('author')->setDefault('')->setComment('编辑人员'))
            ->addColumn(Column::string('intro')->setDefault('')->setComment('简介'))
            ->addColumn(Column::text('content')->setComment('描述'))
            ->addColumn(Column::string('attachment', 1000)->setDefault('')->setComment('附件'))
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
        $this->dropTable('content');
    }
}
