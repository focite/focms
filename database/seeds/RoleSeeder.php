<?php

use think\facade\Db;
use think\migration\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $result = Db::name('role')->count();
        if (empty($result)) {
            Db::name('role')->insert([
                'id' => 1,
                'title' => '超级管理员',
                'rules' => '1',
                'status' => 1,
            ]);
        }
    }
}
