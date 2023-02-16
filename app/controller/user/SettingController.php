<?php

declare(strict_types=1);

namespace app\controller\user;

use app\request\user\setting\EditPasswordRequest;
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
    public function editPasswordHandle(Request $request): Json
    {
        return $this->success('data');
    }
}
