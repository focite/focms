<?php

declare(strict_types=1);

namespace app\response;

abstract class Transformer
{
    /**
     * 转换集合数据
     */
    public function transformCollection($data): array
    {
        return array_map([$this, 'transform'], $data);
    }

    /**
     * 转换集合对象
     */
    abstract public function transform($item);
}
