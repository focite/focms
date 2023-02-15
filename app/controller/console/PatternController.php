<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class PatternController extends BaseController
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
     * 保存模型
     */
    public function storeHandle(): Json
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
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除模型
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
