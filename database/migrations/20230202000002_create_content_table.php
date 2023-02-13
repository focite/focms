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
        // 内容表
        $table = $this->table('content');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))
            ->addColumn(Column::string('title')->setComment('标题'))
            ->addColumn(Column::string('keywords')->setComment('关键词'))
            ->addColumn(Column::string('description')->setComment('描述'))
            ->addColumn(Column::text('content')->setComment('描述'))
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
