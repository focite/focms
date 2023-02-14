<?php

declare(strict_types=1);

namespace app\service\user;

use app\enums\UserEnum;
use app\model\User;
use app\service\user\model\UserModel;

class UserService
{
    /**
     * 根据条件查询用户
     */
    public function find(string $field, int|string $value): ?UserModel
    {
        $condition = [
            $field => $value,
            'status' => UserEnum::STATUS_OK,
        ];

        $user = User::where($condition)->findOrEmpty();
        if ($user->isEmpty()) {
            return null;
        }

        $userModel = new UserModel();
        $userModel->setId($user->id);
        $userModel->setUsername($user->username);
        $userModel->setPassword($user->password);
        $userModel->setPasswordSalt($user->password_salt);

        return $userModel;
    }

    /**
     * 根据用户ID查询用户
     */
    public function findById(int $id): ?UserModel
    {
        return $this->find('id', $id);
    }

    /**
     * 根据用户名查询用户
     */
    public function findByUsername(string $username): ?UserModel
    {
        return $this->find('username', $username);
    }

    /**
     * 通过邮件地址查询用户
     */
    public function findByEmail(string $email): ?UserModel
    {
        $userAuthService = new UserAuthService();
        $userAuth = $userAuthService->find('email', $email);
        if ($userAuth->isEmpty()) {
            return null;
        }

        return $this->findById($userAuth->user_id);
    }

    /**
     * 通过手机号码查询用户
     */
    public function findByMobile(string $mobile): ?UserModel
    {
        $userAuthService = new UserAuthService();
        $userAuth = $userAuthService->find('mobile', $mobile);
        if ($userAuth->isEmpty()) {
            return null;
        }

        return $this->findById($userAuth->user_id);
    }

    /**
     * 根据用户remember token查询用户
     */
    public function findByRememberToken(string $remember_token): ?UserModel
    {
        return $this->find('remember_token', $remember_token);
    }

    /**
     * 根据用户reset token查询用户
     */
    public function findByResetToken(string $reset_token): ?UserModel
    {
        return $this->find('reset_token', $reset_token);
    }
}
