<?php

use think\facade\Route;
use think\helper\Str;

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

// 自动化路由
$dirs = glob(app_path('controller/*'), GLOB_ONLYDIR);
foreach ($dirs as $dir) {
    $m = basename($dir);
    $v = $m === config('app.default_app') ? '' : $m;
    Route::group($v, function () {
        Route::get(':c/:a', ':c/:a');
        Route::post(':c/:a', ':c/:aHandle');
        Route::get(':c', ':c/index');
        Route::get('/', 'Index/index');
    })->prefix($m.'.');
}
