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
        $table->addColumn(Column::date('access_time')->setComment('请求日期'))
            ->addColumn(Column::unsignedInteger('visit_times')->setDefault(0)->setComment('请求次数'))
            ->addColumn(Column::string('ip_address')->setDefault('')->setComment('IP地址'))
            ->addColumn(Column::string('system')->setDefault('')->setComment('操作系统'))
            ->addColumn(Column::string('browser')->setDefault('')->setComment('浏览器'))
            ->addColumn(Column::string('language')->setDefault('')->setComment('语言'))
            ->addColumn(Column::string('area')->setDefault('')->setComment('地区'))
            ->addColumn(Column::string('referer_domain')->setDefault('')->setComment('来源域名'))
            ->addColumn(Column::string('referer_path')->setDefault('')->setComment('来源地址'))
            ->addColumn(Column::string('access_url')->setDefault('')->setComment('请求url地址'))
            ->addTimestamps()
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
