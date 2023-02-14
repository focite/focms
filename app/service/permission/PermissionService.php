<?php

declare(strict_types=1);

namespace app\service\permission;

use app\model\Permission;

class PermissionService
{
    /**
     * 获取管理资源链接
     */
    public function menuList(int $menu = 1, int $status = 1): array
    {
        $collection = Permission::where('status', $status)
            ->where('is_menu', $menu)
            ->order('sort', 'asc')
            ->order('id', 'asc')
            ->get();

        $data = collect($collection)->toArray();

        $menu = [];
        foreach ($data as $item) {
            if ($item['parent_id'] == 0) {
                $filtered = $collection->filter(function ($v) use ($item) {
                    return $v['parent_id'] == $item['id'];
                });

                $sub = [];
                foreach ($filtered->all() as $v) {
                    $sub[] = [
                        'name' => $v['name'],
                        'url' => route('admin.'.$v['rule']),
                        'icon' => $v['icon'],
                    ];
                }

                $menu[] = [
                    'name' => $item['name'],
                    'url' => 'javascript:void(0);',
                    'icon' => $item['icon'],
                    'sub' => $sub,
                ];
            }
        }

        return $menu;
    }
}
