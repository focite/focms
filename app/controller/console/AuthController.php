<?php

declare(strict_types=1);

namespace app\controller\console;

use app\controller\Controller;
use app\enums\GlobalConst;
use app\middleware\RedirectIfAuthenticated;
use app\request\console\auth\ForgotRequest;
use app\request\console\auth\LoginRequest;
use app\request\console\auth\ResetRequest;
use app\service\auth\input\LoginInput;
use app\service\auth\LoginService;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class AuthController extends Controller
{
    protected array $middleware = [
        [RedirectIfAuthenticated::class, [GlobalConst::CONSOLE_MODULE]],
    ];

    /**
     * 显示登录页面
     */
    public function login(Request $request): Redirect|View
    {
        $callback = $request->get('callback', '/');

        return view('login', ['callback' => urldecode($callback)]);
    }

    /**
     * 登录操作
     */
    public function loginHandle(Request $request): Json
    {
        try {
            validate(LoginRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        $loginInput = new LoginInput();
        $loginInput->setUsername($request->post('username'));
        $loginInput->setPassword($request->post('password'));
        $loginInput->setRememberMe($request->post('remember') === 'on');

        try {
            $loginService = new LoginService();
            $userId = $loginService->login($loginInput);

            $loginService->loginUsingId($userId, GlobalConst::CONSOLE_MODULE, $loginInput->isRememberMe());

            if ($request->isJson()) {
                // TODO
                return $this->success('jwt');
            } else {
                return $this->success('ok');
            }
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * 显示忘记密码页面
     */
    public function forgot(Request $request): View
    {
        return view('forgot');
    }

    /**
     * 忘记密码操作
     */
    public function forgotHandle(Request $request): Json
    {
        try {
            validate(ForgotRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }

    /**
     * 显示重设密码页面
     */
    public function reset(Request $request): View
    {
        $token = $request->get('token');

        // todo check

        return view('reset');
    }

    /**
     * 重设密码操作
     */
    public function resetHandle(Request $request): Json
    {
        try {
            validate(ResetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('');
    }
}
