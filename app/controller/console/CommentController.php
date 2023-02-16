<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\comment\DestroyRequest;
use app\request\console\comment\QueryRequest;
use app\request\console\comment\StoreRequest;
use app\request\console\comment\UpdateRequest;
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
     * 保存评论
     */
    public function storeHandle(Request $request): Json
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
    public function updateHandle(Request $request): Json
    {
        return $this->success('update');
    }

    /**
     * 删除评论
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('destroy');
    }
}
