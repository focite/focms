<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateContentTypeTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // TODO form,segment
        $table = $this->table('pattern', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '内容模型表']);
        $table->addColumn(Column::string('name')->setUnique()->setComment('模型名称'))
            ->addColumn(Column::string('intro')->setDefault('')->setComment('模型描述'))
            ->addColumn(Column::text('fields')->setComment('模型附加字段'))
            ->addColumn(Column::unsignedInteger('system')->setDefault(2)->setComment('系统模型:1是，2否'))
            ->addColumn(Column::unsignedInteger('status')->setDefault(1)->setComment('状态:1正常，2不正常'))
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
        $this->dropTable('pattern');
    }
}

