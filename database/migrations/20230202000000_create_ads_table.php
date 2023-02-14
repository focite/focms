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
        $table->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('类型:0广告位,其他为广告内容'))
            ->addColumn(Column::string('name')->setDefault('')->setComment('标题'))
            ->addColumn(Column::string('description')->setDefault('')->setComment('描述'))
            ->addColumn(Column::unsignedInteger('width')->setDefault(0)->setComment('广告宽度'))
            ->addColumn(Column::unsignedInteger('height')->setDefault(0)->setComment('广告高度'))
            ->addColumn(Column::string('link')->setDefault('')->setComment('链接地址'))
            ->addColumn(Column::string('code')->setDefault('')->setComment('广告内容'))
            ->addColumn(Column::dateTime('start_time')->setComment('开始时间'))
            ->addColumn(Column::dateTime('end_time')->setComment('结束时间'))
            ->addColumn(Column::unsignedInteger('click_count')->setDefault(0)->setComment('点击量'))
            ->addColumn(Column::unsignedInteger('sort')->setDefault(0)->setComment('排序'))
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
        $this->dropTable('ads');
    }
}
