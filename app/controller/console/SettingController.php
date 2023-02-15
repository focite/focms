<?php

declare(strict_types=1);

namespace app\controller\console;

use think\response\Json;
use think\response\View;

class SettingController extends BaseController
{
    /**
     * 基本参数
     */
    public function basic(): Json
    {
        return $this->success('');
    }

    /**
     * 公司信息
     */
    public function company(): Json
    {
        return $this->success('');
    }

    /**
     * 网站信息
     */
    public function site(): Json
    {
        return $this->success('');
    }

    /**
     * 邮件设置
     */
    public function email(): Json
    {
        return $this->success('');
    }
}
