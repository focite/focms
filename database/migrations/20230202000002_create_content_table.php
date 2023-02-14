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
        $table = $this->table('content', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci', 'comment' => '内容表']);
        $table->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级的ID'))
            ->addColumn(Column::unsignedInteger('in_station')->setDefault(1)->setComment('内容类型:1站内,2站外'))
            ->addColumn(Column::unsignedInteger('pattern_id')->setComment('模型ID'))
            ->addColumn(Column::string('pattern_code')->setComment('模型类型'))
            ->addColumn(Column::string('title')->setUnique()->setComment('标题'))
            ->addColumn(Column::string('keywords')->setDefault('')->setComment('关键词'))
            ->addColumn(Column::string('description')->setDefault('')->setComment('描述'))
            ->addColumn(Column::string('author')->setDefault('')->setComment('编辑人员'))
            ->addColumn(Column::string('image')->setDefault('')->setComment('图片'))
            ->addColumn(Column::string('intro')->setDefault('')->setComment('简介'))
            ->addColumn(Column::text('content')->setComment('描述'))
            ->addColumn(Column::text('extension')->setComment('JSON内容扩展'))
            ->addColumn(Column::string('attachment', 1000)->setDefault('')->setComment('附件'))
            ->addColumn(Column::string('redirect_url', 1000)->setDefault('')->setComment('站外链接'))
            ->addColumn(Column::string('template_index')->setDefault('')->setComment('频道模板'))
            ->addColumn(Column::string('template_list')->setDefault('')->setComment('列表模板'))
            ->addColumn(Column::string('template_detail')->setDefault('')->setComment('详情模板'))
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
        $this->dropTable('content');
    }
}
