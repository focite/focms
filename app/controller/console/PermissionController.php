<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\permission\DestroyRequest;
use app\request\console\permission\QueryRequest;
use app\request\console\permission\StoreRequest;
use app\request\console\permission\UpdateRequest;
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
    public function queryHandle(Request $request): Json
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
    public function storeHandle(Request $request): Json
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
    public function updateHandle(Request $request): Json
    {
        return $this->success('update');
    }

    /**
     * 删除权限
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('destroy');
    }
}
