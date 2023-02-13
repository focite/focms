<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateCommentTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $table = $this->table('comment', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '内容评论表']);
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
        $this->dropTable('comment');
    }
}
