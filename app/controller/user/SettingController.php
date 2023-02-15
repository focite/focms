<?php

declare(strict_types=1);

namespace app\controller\user;

use think\response\Json;
use think\response\View;

class SettingController extends BaseController
{
    /**
     * 显示修改密码表单
     */
    public function editPassword(): View
    {
        return view('edit_password');
    }

    /**
     * 修改密码
     */
    public function editPasswordHandle(): Json
    {
        return $this->success('data');
    }
}
