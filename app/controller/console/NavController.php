<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class NavController extends BaseController
{
    /**
     * 导航列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 导航搜索
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
     * 保存导航
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示导航
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑导航
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新导航
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除导航
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
