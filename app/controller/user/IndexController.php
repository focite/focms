<?php

declare(strict_types=1);

namespace app\controller\user;

use think\response\Json;

class IndexController extends BaseController
{
    /**
     * 会员首页
     */
    public function index(): Json
    {
        return $this->success('data');
    }
}
