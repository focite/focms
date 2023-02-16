<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\index\PasswordRequest;
use app\request\console\index\ProfileRequest;
use app\service\permission\PermissionService;
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
        $permissionService = new PermissionService();
        $menu = $permissionService->getMenu();

        return $this->json($menu);
    }

    /**
     * 系统消息
     */
    public function message(): Json
    {
        return $this->json(['message']);
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
    public function profileHandle(ProfileRequest $request): Json
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
    public function passwordHandle(PasswordRequest $request): Json
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
