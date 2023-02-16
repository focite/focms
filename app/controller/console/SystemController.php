<?php

declare(strict_types=1);

namespace app\controller\console;

use app\request\console\system\UpgradeRequest;
use think\response\Json;

class SystemController extends BaseController
{
    /**
     * 关于我们
     */
    public function about(): Json
    {
        return $this->success('');
    }

    /**
     * 系统日志
     */
    public function log(): Json
    {
        return $this->success('');
    }

    /**
     * 在线更新
     */
    public function upgrade(): Json
    {
        return $this->success('');
    }

    /**
     * 在线更新
     */
    public function upgradeHandle(UpgradeRequest $request): Json
    {
        return $this->success('');
    }
}
