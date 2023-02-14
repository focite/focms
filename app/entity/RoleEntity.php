<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class RoleEntity
{

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string 角色名称
     */
    public string $name;

    /**
     * @var string 角色描述
     */
    public string $description;

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
     * 获取角色名称
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置角色名称
     * @param string $value
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * 获取角色描述
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * 设置角色描述
     * @param string $value
     */
    public function setDescription(string $value): void
    {
        $this->description = $value;
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