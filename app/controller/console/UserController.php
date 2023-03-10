<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\user\DestroyRequest;
use app\request\console\user\QueryRequest;
use app\request\console\user\StoreRequest;
use app\request\console\user\UpdateRequest;
use think\response\Json;
use think\response\View;

class UserController extends BaseController
{
    /**
     * 模型列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 模型搜索
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
     * 保存模型
     */
    public function storeHandle(Request $request): Json
    {
        return $this->success('store');
    }

    /**
     * 显示模型
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑模型
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新模型
     */
    public function updateHandle(Request $request): Json
    {
        return $this->success('update');
    }

    /**
     * 删除用户
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('destroy');
    }
}
