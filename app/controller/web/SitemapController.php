<?php

declare(strict_types=1);

namespace app\controller\web;

use think\response\View;

class SitemapController extends BaseController
{
    /**
     * 网站地图
     */
    public function index(): View
    {
        return view('index');
    }
}
