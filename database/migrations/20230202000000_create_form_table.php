<?php

use think\migration\Migrator;
use think\migration\db\Column;

return new class extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 表单表
        $table = $this->table('form');
        $table->addColumn(Column::unsignedInteger('id')->setUnsigned()->setComment('编号'))

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
        $this->dropTable('form');
    }
};
