<?php

declare(strict_types=1);

namespace app\middleware;

use Closure;
use think\Request;
use think\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next, string $guard): Response
    {
        if (! session('?auth_'.$guard)) {
            if ($request->isAjax()) {
                return json([
                    'code' => 40001,
                    'message' => 'Unauthorized',
                    'data' => null,
                ]);
            } else {
                $callback = urlencode($request->url(true));

                return redirect('/'.$guard.'/auth/login?callback='.$callback);
            }
        }

        return $next($request);
    }
}
