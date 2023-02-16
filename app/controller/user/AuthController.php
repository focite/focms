<?php

declare(strict_types=1);

namespace app\controller\user;

use app\controller\web\BaseController as Controller;
use app\enums\GlobalConst;
use app\middleware\RedirectIfAuthenticated;
use app\request\user\auth\BindRequest;
use app\request\user\auth\ForgotRequest;
use app\request\user\auth\LoginRequest;
use app\request\user\auth\RegisterRequest;
use app\request\user\auth\ResetRequest;
use app\service\auth\input\LoginInput;
use app\service\auth\LoginService;
use think\exception\ValidateException;
use think\Request;
use think\response\Json;
use think\response\Redirect;
use think\response\View;

class AuthController extends Controller
{
    /**
     * @var array
     */
    protected array $middleware = [
        [RedirectIfAuthenticated::class, [GlobalConst::USER_MODULE]],
    ];

    /**
     * 显示登录页面
     */
    public function login(Request $request): View
    {
        return view('login');
    }

    /**
     * 登录操作
     */
    public function loginHandle(LoginRequest $request): Json
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
            $loginService->login($loginInput, GlobalConst::USER_MODULE);

            return $this->success('ok');
        } catch (\Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * 显示注册页面
     */
    public function register(Request $request): View
    {
        return view('register');
    }

    /**
     * 注册操作
     */
    public function registerHandle(RegisterRequest $request): Json
    {
        try {
            validate(RegisterRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
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
    public function forgotHandle(ForgotRequest $request): Json
    {
        try {
            validate(ForgetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
    }

    /**
     * 显示重置密码页面
     */
    public function reset(Request $request): View
    {
        return view('reset');
    }

    /**
     * 重置密码操作
     */
    public function resetHandle(ResetRequest $request): Json
    {
        try {
            validate(ResetRequest::class)->check($request->post());
        } catch (ValidateException $e) {
            return $this->error($e->getError());
        }

        return $this->success('data');
    }

    /**
     * 社会化登录
     */
    public function connect(Request $request): Redirect
    {
        return redirect('/');
    }

    /**
     * 社会化登录回调
     */
    public function callback(Request $request): Redirect
    {
        return redirect('/');
    }

    /**
     * 显示社会化登录绑定页面
     */
    public function bind(Request $request): View
    {
        return view('bind');
    }

    /**
     * 社会化登录绑定操作
     */
    public function bindHandle(BindRequest $request): Json
    {
        return $this->success('data');
    }
}
