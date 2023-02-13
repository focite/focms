<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateSegmentTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('segment', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '内容片段表']);
        $table

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
        $this->dropTable('segment');
    }
}
