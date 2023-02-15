<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class LinkController extends BaseController
{
    /**
     * 链接列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 链接搜索
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
     * 保存链接
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示链接
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑链接
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新链接
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除链接
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
