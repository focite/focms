<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class AdController extends BaseController
{
    /**
     * 广告列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 广告搜索
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
     * 保存广告
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示广告
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑广告
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新广告
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除广告
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
