<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class PermissionController extends BaseController
{
    /**
     * 权限列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 权限搜索
     */
    public function queryHandle(): Json
    {
        return $this->success('query');
    }

    /**
     * 创建表单
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * 保存权限
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示权限
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑权限
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新权限
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除权限
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
