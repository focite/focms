<?php

declare(strict_types=1);

namespace app\command;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\facade\Db;
use think\helper\Str;

class GenRequest extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('gen:request')
            ->setDescription('the generate command');
    }

    protected function execute(Input $input, Output $output)
    {
        $modules = glob(app_path('controller/*'), GLOB_ONLYDIR);
        foreach ($modules as $module) {
            $files = glob($module . '*Controller.php');
            foreach ($files as $file) {
                $file = str_replace('\\', '/', $file);
                $methods = $this->getMethods($module, $file);

                preg_match('/(\w+)Controller\.php/', $file, $matches);
                $this->writeFile($module, $matches[1], $methods);
            }
        }
    }

    /**
     * 获取请求方法
     */
    private function getMethods($module, $file): array
    {
        $content = file_get_contents($file);
        preg_match_all('/public function (.+)Handle\(/', $content, $matches);
        return $matches[1] ?? [];
    }

    /**
     * 生成请求类
     */
    private function writeFile($module, $controller, $methods): void
    {
        $requestPath = app_path('request/' . $module);
        $path = $requestPath . '/' . $controller;
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        $import = '';
        $patterns = [];
        foreach ($methods as $method) {
            $request = Str::studly($method) . 'Request';
            $content = $this->requestTpl($module, $controller, $request);
            file_put_contents($path . '/' . $request . '.php', $content);

            $import .= "use app\\request\\$module\\$controller\\$request;\n";
            $patterns['/public function ' . $method . 'Handle\(.* \$request\)/'] = 'public function ' . $method . 'Handle(' . $request . ' $request)';
            $patterns['/public function ' . $method . 'Handle\(\)/'] = 'public function ' . $method . 'Handle(' . $request . ' $request)';
        }

        $usePattern["/use app\\\request\\\.*\n/"] = '';
        $patterns["/class (.+?Controller)/"] = $import . "\n" . 'class \1';

        $controllerFile = app_path('controller/' . $module) . $controller . 'Controller.php';
        $controllerContent = file_get_contents($controllerFile);

        $controllerContent = preg_replace(array_keys($usePattern), array_values($usePattern), $controllerContent);
        $controllerContent = preg_replace(array_keys($patterns), array_values($patterns), $controllerContent);
        file_put_contents($controllerFile, $controllerContent);
    }

    private function requestTpl($module, $controller, $method): string
    {
        return <<<EOF
<?php

declare(strict_types=1);

namespace app\\request\\$module\\$controller;

use think\Validate;

class {$method} extends Validate
{

}
EOF;
    }
}
