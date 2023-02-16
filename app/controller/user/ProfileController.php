<?php

declare(strict_types=1);

namespace app\controller\user;

use app\request\user\profile\UpdateRequest;
use think\response\Json;
use think\response\View;

class ProfileController extends BaseController
{
    public function index(): View
    {
        return view('index');
    }

    public function updateHandle(Request $request): Json
    {
        return $this->success('');
    }
}
