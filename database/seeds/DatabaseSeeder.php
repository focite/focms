<?php

use think\migration\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $this->call([
            SettingSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            RolePermissionRelationSeeder::class,
            UserRoleRelationSeeder::class,
        ]);
    }
}
