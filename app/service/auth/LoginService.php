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
    public function login(LoginInput $loginInput): int
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

        // 记录日志 TODO

        return $userModel->getId();
    }

    /**
     * 使用用户ID登录
     */
    public function loginUsingId(int $userId, string $guard, bool $rememberMe): void
    {
        session('auth_' . $guard, $userId);

        // 记住登录
        if ($rememberMe) {
            cookie($guard . '_remember', $userId, 30 * 24 * 3600);
        }
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
