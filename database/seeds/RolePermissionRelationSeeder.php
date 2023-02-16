<?php

use think\facade\Db;
use think\migration\Seeder;

class RolePermissionRelationSeeder extends Seeder
{
    public function run()
    {
        Db::transaction(function () {
            $roleId = 1;

            $permission = Db::name('permission')->where('status', 1)->select();

            $privilege = [];
            foreach ($permission as $item) {
                $privilege[] = ['role_id' => $roleId, 'permission_id' => $item['id']];
            }

            Db::name('role_permission_relation')->where('role_id', $roleId)->delete();
            Db::name('role_permission_relation')->insertAll($privilege);
        });
    }
}
