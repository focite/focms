<?php

declare(strict_types=1);

namespace app\controller;

use think\App;
use think\facade\Session;
use think\Request;
use think\response\Json;
use think\Validate;

abstract class Controller
{
    /**
     * 应用实例
     *
     * @var App
     */
    protected App $app;

    /**
     * Request实例
     *
     * @var Request
     */
    protected Request $request;

    /**
     * 是否批量验证
     *
     * @var bool
     */
    protected bool $batchValidate = false;

    /**
     * 控制器中间件
     *
     * @var array
     */
    protected array $middleware = [];

    /**
     * @var string 客户端 ID
     */
    protected string $clientName = 'X-Client-Id';

    /**
     * 构造方法
     *
     * @param  App  $app  应用对象
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->request = $this->app->request;

        // 控制器初始化
        $this->initialize();
    }

    // 初始化
    protected function initialize()
    {
    }

    /**
     * @param  array  $data 数据
     * @param  array|string  $validate 验证器名或者验证规则数组
     * @param  array  $message 提示信息
     * @param  bool  $batch 是否批量验证
     * @return bool
     */
    protected function validate(array $data, array|string $validate, array $message = [], bool $batch = false): bool
    {
        if (is_array($validate)) {
            $v = new Validate();
            $v->rule($validate);
        } else {
            if (strpos($validate, '.')) {
                // 支持场景
                [$validate, $scene] = explode('.', $validate);
            }
            $class = str_contains($validate, '\\') ? $validate : $this->app->parseClass('validate', $validate);
            $v = new $class();
            if (! empty($scene)) {
                $v->scene($scene);
            }
        }

        $v->message($message);

        // 是否批量验证
        if ($batch || $this->batchValidate) {
            $v->batch();
        }

        return $v->failException()->check($data);
    }

    /**
     * 返回 Json 数据格式
     *
     * @param $data
     * @param  array  $headers
     * @return Json
     */
    protected function json($data, array $headers = []): Json
    {
        $clientId = request()->header($this->clientName, md5($this->createSessionId()));

        return json($data, 200, array_merge($headers, [$this->clientName => $clientId]));
    }

    /**
     * 返回封装后的API数据到客户端
     *
     * @param  mixed  $data 要返回的数据
     * @param  array  $headers 发送的Header信息
     * @return Json
     */
    protected function success($data, array $headers = []): Json
    {
        return $this->json([
            'code' => 0,
            'message' => 'ok',
            'data' => $data,
        ], $headers);
    }

    /**
     * 返回异常数据到客户端
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array  $headers
     * @return Json
     */
    protected function error(string $message = '', int $code = 40001, array $headers = []): Json
    {
        return $this->json([
            'code' => $code,
            'message' => $message,
            'data' => null,
        ], $headers);
    }

    /**
     * 创建 Session ID
     *
     * @return string
     */
    protected function createSessionId(): string
    {
        return bin2hex(pack('d', microtime(true)).pack('N', mt_rand()));
    }
}
