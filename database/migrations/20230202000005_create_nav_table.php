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
        $this->dropTable('nav');
    }
}
