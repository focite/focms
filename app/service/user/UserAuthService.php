<?php

declare(strict_types=1);

namespace app\service\user;

use app\enums\UserAuthEnum;
use app\model\UserAuth;

class UserAuthService
{
    /**
     * 根据条件查询用户
     */
    public function find(string $type, string $identifier)
    {
        $condition = [
            'type' => $type,
            'identifier' => $identifier,
            'status' => UserAuthEnum::STATUS_OK
        ];

        return UserAuth::where($condition)->findOrEmpty();
    }
}
