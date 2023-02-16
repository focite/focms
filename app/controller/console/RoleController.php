<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\role\DestroyRequest;
use app\request\console\role\QueryRequest;
use app\request\console\role\StoreRequest;
use app\request\console\role\UpdateRequest;
use think\response\Json;
use think\response\View;

class RoleController extends BaseController
{
    /**
     * 角色列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 角色搜索
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
     * 保存角色
     */
    public function storeHandle(Request $request): Json
    {
        return $this->success('store');
    }

    /**
     * 显示角色
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑角色
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新角色
     */
    public function updateHandle(Request $request): Json
    {
        return $this->success('update');
    }

    /**
     * 删除角色
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('destroy');
    }
}
