<?php

declare(strict_types=1);

namespace app\manager\user;

use app\entity\User;
use app\model\UserModel;

class UserManager
{
    /**
     * 根据条件查询用户
     *
     * @param array $condition
     * @return UserModel|null
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
     *
     * @param int $id
     * @return UserModel|null
     */
    public function findById(int $id): ?UserModel
    {
        return $this->find(['id' => $id]);
    }

    /**
     * 根据用户名查询用户
     *
     * @param string $username
     * @return UserModel|null
     */
    public function findByUsername(string $username): ?UserModel
    {
        return $this->find(['username' => $username]);
    }

    /**
     * 根据用户邮箱查询用户
     *
     * @param string $email
     * @return UserModel|null
     */
    public function findByEmail(string $email): ?UserModel
    {
        return $this->find(['email' => $email]);
    }

    /**
     * 根据用户手机号查询用户
     *
     * @param string $mobile
     * @return UserModel|null
     */
    public function findByMobile(string $mobile): ?UserModel
    {
        return $this->find(['mobile' => $mobile]);
    }

    /**
     * 密码加密
     * @param string $password
     * @return string
     */
    public function passwordHash(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * 密码校验
     * @param string $password
     * @param string $hash
     * @return bool
     */
    public function passwordVerify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
