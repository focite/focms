<?php

declare(strict_types=1);

namespace app\support;

use think\helper\Str as BaseStr;

class Str extends BaseStr
{
    /**
     * 密码加密
     */
    public static function password(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    /**
     * 密码校验
     */
    public static function passwordVerify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
