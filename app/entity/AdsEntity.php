<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class AdsEntity
{

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var int 类型:0广告位,其他为广告内容
     */
    public int $parent_id;

    /**
     * @var string 标题
     */
    public string $name;

    /**
     * @var string 描述
     */
    public string $description;

    /**
     * @var int 广告宽度
     */
    public int $width;

    /**
     * @var int 广告高度
     */
    public int $height;

    /**
     * @var string 链接地址
     */
    public string $link;

    /**
     * @var string 广告内容
     */
    public string $code;

    /**
     * @var \DateTime 开始时间
     */
    public \DateTime $start_time;

    /**
     * @var \DateTime 结束时间
     */
    public \DateTime $end_time;

    /**
     * @var int 点击量
     */
    public int $click_count;

    /**
     * @var int 排序
     */
    public int $sort;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var \DateTime 
     */
    public \DateTime $create_time;

    /**
     * @var \DateTime 
     */
    public \DateTime $update_time;

    /**
     * @var \DateTime 
     */
    public \DateTime $delete_time;

    /**
     * 获取
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * 设置
     * @param int $value
     */
    public function setId(int $value): void
    {
        $this->id = $value;
    }

    /**
     * 获取类型:0广告位,其他为广告内容
     * @return int
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * 设置类型:0广告位,其他为广告内容
     * @param int $value
     */
    public function setParentId(int $value): void
    {
        $this->parent_id = $value;
    }

    /**
     * 获取标题
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置标题
     * @param string $value
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * 获取描述
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * 设置描述
     * @param string $value
     */
    public function setDescription(string $value): void
    {
        $this->description = $value;
    }

    /**
     * 获取广告宽度
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * 设置广告宽度
     * @param int $value
     */
    public function setWidth(int $value): void
    {
        $this->width = $value;
    }

    /**
     * 获取广告高度
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * 设置广告高度
     * @param int $value
     */
    public function setHeight(int $value): void
    {
        $this->height = $value;
    }

    /**
     * 获取链接地址
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * 设置链接地址
     * @param string $value
     */
    public function setLink(string $value): void
    {
        $this->link = $value;
    }

    /**
     * 获取广告内容
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * 设置广告内容
     * @param string $value
     */
    public function setCode(string $value): void
    {
        $this->code = $value;
    }

    /**
     * 获取开始时间
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->start_time;
    }

    /**
     * 设置开始时间
     * @param \DateTime $value
     */
    public function setStartTime(\DateTime $value): void
    {
        $this->start_time = $value;
    }

    /**
     * 获取结束时间
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->end_time;
    }

    /**
     * 设置结束时间
     * @param \DateTime $value
     */
    public function setEndTime(\DateTime $value): void
    {
        $this->end_time = $value;
    }

    /**
     * 获取点击量
     * @return int
     */
    public function getClickCount(): int
    {
        return $this->click_count;
    }

    /**
     * 设置点击量
     * @param int $value
     */
    public function setClickCount(int $value): void
    {
        $this->click_count = $value;
    }

    /**
     * 获取排序
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * 设置排序
     * @param int $value
     */
    public function setSort(int $value): void
    {
        $this->sort = $value;
    }

    /**
     * 获取状态:1正常,2禁用
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * 设置状态:1正常,2禁用
     * @param int $value
     */
    public function setStatus(int $value): void
    {
        $this->status = $value;
    }

    /**
     * 获取
     * @return \DateTime
     */
    public function getCreateTime(): \DateTime
    {
        return $this->create_time;
    }

    /**
     * 设置
     * @param \DateTime $value
     */
    public function setCreateTime(\DateTime $value): void
    {
        $this->create_time = $value;
    }

    /**
     * 获取
     * @return \DateTime
     */
    public function getUpdateTime(): \DateTime
    {
        return $this->update_time;
    }

    /**
     * 设置
     * @param \DateTime $value
     */
    public function setUpdateTime(\DateTime $value): void
    {
        $this->update_time = $value;
    }

    /**
     * 获取
     * @return \DateTime
     */
    public function getDeleteTime(): \DateTime
    {
        return $this->delete_time;
    }

    /**
     * 设置
     * @param \DateTime $value
     */
    public function setDeleteTime(\DateTime $value): void
    {
        $this->delete_time = $value;
    }

}