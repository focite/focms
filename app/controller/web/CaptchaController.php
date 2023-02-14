<?php

declare(strict_types=1);

namespace app\controller\web;

use think\captcha\facade\Captcha;
use think\Response;

class CaptchaController extends BaseController
{
    /**
     * 显示图片验证码
     */
    public function index(): Response
    {
        return Captcha::create();
    }
}
