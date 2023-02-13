<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateStatsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('stats', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '统计表']);
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
        $this->dropTable('stats');
    }
}
