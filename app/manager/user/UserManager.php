<?php

declare(strict_types=1);

namespace app\manager\user;

use app\model\User;
use app\service\user\model\UserModel;

class UserManager
{
    /**
     * 根据条件查询用户
     */
    public function find(array $condition): ?UserModel
    {
        $user = User::where($condition)->findOrEmpty();
        if ($user->isEmpty()) {
            return null;
        }

        $userModel = new UserModel();
        $userModel->setId($user->id);
        $userModel->setUsername($user->username);

        return $userModel;
    }

    /**
     * 根据用户ID查询用户
     */
    public function findById(int $id): ?UserModel
    {
        return $this->find(['id' => $id]);
    }

    /**
     * 根据用户名查询用户
     */
    public function findByUsername(string $username): ?UserModel
    {
        return $this->find(['username' => $username]);
    }

    /**
     * 根据用户邮箱查询用户
     */
    public function findByEmail(string $email): ?UserModel
    {
        return $this->find(['email' => $email]);
    }

    /**
     * 根据用户手机号查询用户
     */
    public function findByMobile(string $mobile): ?UserModel
    {
        return $this->find(['mobile' => $mobile]);
    }
}
