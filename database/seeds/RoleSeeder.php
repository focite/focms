<?php

use think\facade\Db;
use think\migration\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Db::transaction(function () {
            $result = Db::name('role')->count();
            if (empty($result)) {
                Db::name('role')->insert([
                    'id' => 1,
                    'name' => '超级管理员',
                    'description' => '',
                ]);
            }
        });
    }
}
