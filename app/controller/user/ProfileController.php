<?php

declare(strict_types=1);

namespace app\controller\user;

use think\response\Json;
use think\response\View;

class ProfileController extends BaseController
{
    public function index(): View
    {
        return view('index');
    }

    public function updateHandle(): Json
    {
        return $this->success('');
    }
}
