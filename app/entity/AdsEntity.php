<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class AdsEntity
{

    /**
     * @var int 点击量
     */
    public int $click_count;

    /**
     * @var string 广告内容
     */
    public string $code;

    /**
     * @var string 
     */
    public string $create_time;

    /**
     * @var string 
     */
    public string $delete_time;

    /**
     * @var string 描述
     */
    public string $description;

    /**
     * @var string 结束时间
     */
    public string $end_time;

    /**
     * @var int 广告高度
     */
    public int $height;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string 链接地址
     */
    public string $link;

    /**
     * @var string 标题
     */
    public string $name;

    /**
     * @var int 类型:0广告位,其他为广告内容
     */
    public int $parent_id;

    /**
     * @var int 排序
     */
    public int $sort;

    /**
     * @var string 开始时间
     */
    public string $start_time;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var string 
     */
    public string $update_time;

    /**
     * @var int 广告宽度
     */
    public int $width;

    /**
     * 获取点击量
     */
    public function getClickCount(): int
    {
        return $this->click_count;
    }

    /**
     * 设置点击量
     */
    public function setClickCount(int $value): void
    {
        $this->click_count = $value;
    }

    /**
     * 获取广告内容
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * 设置广告内容
     */
    public function setCode(string $value): void
    {
        $this->code = $value;
    }

    /**
     * 获取
     */
    public function getCreateTime(): string
    {
        return $this->create_time;
    }

    /**
     * 设置
     */
    public function setCreateTime(string $value): void
    {
        $this->create_time = $value;
    }

    /**
     * 获取
     */
    public function getDeleteTime(): string
    {
        return $this->delete_time;
    }

    /**
     * 设置
     */
    public function setDeleteTime(string $value): void
    {
        $this->delete_time = $value;
    }

    /**
     * 获取描述
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * 设置描述
     */
    public function setDescription(string $value): void
    {
        $this->description = $value;
    }

    /**
     * 获取结束时间
     */
    public function getEndTime(): string
    {
        return $this->end_time;
    }

    /**
     * 设置结束时间
     */
    public function setEndTime(string $value): void
    {
        $this->end_time = $value;
    }

    /**
     * 获取广告高度
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * 设置广告高度
     */
    public function setHeight(int $value): void
    {
        $this->height = $value;
    }

    /**
     * 获取
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * 设置
     */
    public function setId(int $value): void
    {
        $this->id = $value;
    }

    /**
     * 获取链接地址
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * 设置链接地址
     */
    public function setLink(string $value): void
    {
        $this->link = $value;
    }

    /**
     * 获取标题
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置标题
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * 获取类型:0广告位,其他为广告内容
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * 设置类型:0广告位,其他为广告内容
     */
    public function setParentId(int $value): void
    {
        $this->parent_id = $value;
    }

    /**
     * 获取排序
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * 设置排序
     */
    public function setSort(int $value): void
    {
        $this->sort = $value;
    }

    /**
     * 获取开始时间
     */
    public function getStartTime(): string
    {
        return $this->start_time;
    }

    /**
     * 设置开始时间
     */
    public function setStartTime(string $value): void
    {
        $this->start_time = $value;
    }

    /**
     * 获取状态:1正常,2禁用
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * 设置状态:1正常,2禁用
     */
    public function setStatus(int $value): void
    {
        $this->status = $value;
    }

    /**
     * 获取
     */
    public function getUpdateTime(): string
    {
        return $this->update_time;
    }

    /**
     * 设置
     */
    public function setUpdateTime(string $value): void
    {
        $this->update_time = $value;
    }

    /**
     * 获取广告宽度
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * 设置广告宽度
     */
    public function setWidth(int $value): void
    {
        $this->width = $value;
    }

}