<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class IndexController extends BaseController
{
    /**
     * 控制台
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 管理菜单
     */
    public function menu(): Json
    {
        $menu = '';

        return $this->json(json_decode($menu, true));
    }

    /**
     * 系统消息
     */
    public function message(): Json
    {
        $menu = file_get_contents(public_path('static/admin/data') . 'menu.json');
        return $menu;
    }

    /**
     * 起始页
     */
    public function dashboard(): Json
    {
        return $this->success('');
    }

    /**
     * 个人资料
     */
    public function profile(): View
    {
        return view('profile');
    }

    /**
     * 更新个人资料
     */
    public function profileHandle(): Json
    {
        return $this->success('ok');
    }

    /**
     * 修改密码
     */
    public function password(): Json
    {
        return $this->success('password');
    }

    /**
     * 修改密码
     */
    public function passwordHandle(): Json
    {
        return $this->success('password');
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
