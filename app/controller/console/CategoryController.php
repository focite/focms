<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\category\DestroyRequest;
use app\request\console\category\QueryRequest;
use app\request\console\category\StoreRequest;
use app\request\console\category\UpdateRequest;
use think\response\Json;
use think\response\View;

class CategoryController extends BaseController
{
    /**
     * 栏目列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 栏目搜索
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
     * 保存栏目
     */
    public function storeHandle(Request $request): Json
    {
        return $this->success('store');
    }

    /**
     * 显示栏目
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑栏目
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新栏目
     */
    public function updateHandle(Request $request): Json
    {
        return $this->success('update');
    }

    /**
     * 删除栏目
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('destroy');
    }
}
