<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class CommentController extends BaseController
{
    /**
     * 评论列表
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 评论搜索
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
     * 保存评论
     */
    public function storeHandle(): Json
    {
        return $this->success('store');
    }

    /**
     * 显示评论
     */
    public function show(): Json
    {
        return $this->success('show');
    }

    /**
     * 编辑评论
     */
    public function edit(): View
    {
        return view('edit');
    }

    /**
     * 更新评论
     */
    public function updateHandle(): Json
    {
        return $this->success('update');
    }

    /**
     * 删除评论
     */
    public function destroyHandle(): Json
    {
        return $this->success('destroy');
    }
}
