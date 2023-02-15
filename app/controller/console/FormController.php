<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class FormController extends BaseController
{
    /**
     * 表单列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 表单搜索
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
     * 保存表单
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示表单
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑表单
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新表单
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除表单
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
