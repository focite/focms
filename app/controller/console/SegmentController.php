<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class SegmentController extends BaseController
{
    /**
     * 标签列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 标签搜索
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
     * 保存标签
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示标签
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑标签
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新标签
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除标签
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
