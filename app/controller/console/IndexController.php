<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;

class IndexController extends BaseController
{
    /**
     * 管理数据
     */
    public function index(): Json
    {
        return $this->success('');
    }

    /**
     * 起始页
     */
    public function dashboard(): Json
    {
        return $this->success('');
    }

    /**
     * 注销登录
     */
    public function logout(): Json
    {
        session('auth_console', null);

        return $this->success('logout');
    }
}
