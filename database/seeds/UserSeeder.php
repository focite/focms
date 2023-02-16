<?php

use app\entity\UserAuthEntity;
use app\entity\UserEntity;
use app\support\Carbon;
use app\support\Str;
use think\facade\Db;
use think\migration\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        Db::transaction(function () {
            $result = Db::name('user')->count();
            if (empty($result)) {
                $userEntity = new UserEntity();
                $userEntity->setId(1);
                $userEntity->setName('李四');
                $userEntity->setAvatar('url');
                $userEntity->setBirthday(Carbon::now()->toDateString());
                $userEntity->setUsername('admin');
                $userEntity->setPassword(Str::password('0192023a7bbd73250516f069df18b500')); // admin123
                $userEntity->setPasswordSalt('');
                $userEntity->setIsAdmin(1);
                $userId = Db::name('user')->insert(collect($userEntity)->toArray(), true);

                $userAuthEntity = new UserAuthEntity();
                $userAuthEntity->setUserId($userId);
                $userAuthEntity->setType('mobile');
                $userAuthEntity->setIdentifier('18888888888');
                $userAuthEntity->setCredential('');
                $userAuthEntity->setStatus(1);
                Db::name('user_auth')->insert(collect($userAuthEntity)->toArray());

                $userAuthEntity2 = clone $userAuthEntity;
                $userAuthEntity2->setType('email');
                $userAuthEntity2->setIdentifier('aa@bb.com');
                Db::name('user_auth')->insert(collect($userAuthEntity2)->toArray());
            }
        });
    }
}
