<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

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
    public function upgradeHandle(): Json
    {
        return $this->success('');
    }
}
