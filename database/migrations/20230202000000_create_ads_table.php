<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAdsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('ads', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '广告表']);
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
        $this->dropTable('ads');
    }
}
