<?php

use think\facade\Db;
use think\migration\Seeder;

class UserRoleRelationSeeder extends Seeder
{
    public function run()
    {
        Db::transaction(function () {
            $result = Db::name('user_role_relation')->count();
            if (empty($result)) {
                Db::name('user_role_relation')->insert(['user_id' => 1, 'role_id' => 1]);
            }
        });
    }
}
