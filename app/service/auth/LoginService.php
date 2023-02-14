<?php

declare(strict_types=1);

namespace app\service\auth;

use app\service\auth\input\LoginInput;
use app\service\user\model\UserModel;
use app\service\user\UserService;
use app\support\Str;
use Exception;

class LoginService
{
    /**
     * 根据用户名和密码登录
     *
     * @throws Exception
     */
    public function login(LoginInput $loginInput, string $guard): bool
    {
        $userModel = $this->user($loginInput->getUsername());
        if (is_null($userModel)) {
            throw new Exception('用户信息不存在');
        }

        // 校验密码
        $password = $loginInput->getPassword().$userModel->getPasswordSalt();
        if (!Str::passwordVerify($password, $userModel->getPassword())) {
            throw new Exception('用户登录密码不正确');
        }

        // 校验状态

        // 记录日志

        // 记住登录
        if ($loginInput->isRememberMe()) {
            cookie($guard . '_remember', $userModel->getId(), 30 * 24 * 3600);
        }

        // 保存session
        session('auth_' . $guard, $userModel->getId());

        return true;
    }

    /**
     * 获取登录用户
     */
    private function user(string $username): ?UserModel
    {
        $userService = new UserService();
        if (is_email($username)) {
            return $userService->findByEmail($username);
        } elseif (is_mobile($username)) {
            return $userService->findByMobile($username);
        }
        return $userService->findByUsername($username);
    }
}
