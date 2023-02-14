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
        $table->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级的ID'))
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addColumn(Column::string('user_name')->setDefault('')->setComment('用户昵称'))
            ->addColumn(Column::unsignedInteger('content_id')->setComment('内容ID'))
            ->addColumn(Column::string('comment')->setDefault('')->setComment('评论内容'))
            ->addColumn(Column::unsignedInteger('rank')->setDefault(0)->setComment('评论等级'))
            ->addColumn(Column::string('user_agent')->setDefault('')->setComment('User Agent'))
            ->addColumn(Column::string('ip_address')->setDefault('')->setComment('IP地址'))
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
        $this->dropTable('comment');
    }
}
