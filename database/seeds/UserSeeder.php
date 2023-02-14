<?php

use app\entity\UserEntity;
use app\support\Carbon;
use app\support\Str;
use think\facade\Db;
use think\migration\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userEntity = new UserEntity();
        $userEntity->setName('李四');
        $userEntity->setAvatar('url');
        $userEntity->setBirthday(Carbon::now()->toDateString());
        $userEntity->setUsername('admin');
        $userEntity->setPassword(Str::password('admin123'));
        $userEntity->setPasswordSalt('');
        $userEntity->setIsAdmin(1);

        $result = Db::name('user')->count();
        if (empty($result)) {
            Db::name('user')->insert(collect($userEntity)->toArray());
        }
    }
}
