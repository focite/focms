<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class ContentController extends BaseController
{
    /**
     * 内容列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 内容搜索
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
     * 保存内容
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示内容
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑内容
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新内容
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除内容
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
