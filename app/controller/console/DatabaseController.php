<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\database\BackupRequest;
use app\request\console\database\DestroyRequest;
use app\request\console\database\QueryRequest;
use app\request\console\database\RollbackRequest;
use think\response\Json;
use think\response\View;

class DatabaseController extends BaseController
{
    /**
     * 数据库管理
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 数据库搜索
     */
    public function queryHandle(Request $request): Json
    {
        return $this->success('query');
    }

    /**
     * 数据库备份
     */
    public function backupHandle(Request $request): Json
    {
        return $this->success('');
    }

    /**
     * 数据库回滚
     */
    public function rollbackHandle(Request $request): Json
    {
        return $this->success('');
    }

    /**
     * 删除备份
     */
    public function destroyHandle(Request $request): Json
    {
        return $this->success('');
    }
}
