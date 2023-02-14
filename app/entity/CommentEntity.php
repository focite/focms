<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class CommentEntity
{

    /**
     * @var string 评论内容
     */
    public string $comment;

    /**
     * @var int 内容ID
     */
    public int $content_id;

    /**
     * @var \DateTime 
     */
    public \DateTime $create_time;

    /**
     * @var \DateTime 
     */
    public \DateTime $delete_time;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string IP地址
     */
    public string $ip_address;

    /**
     * @var int 父级的ID
     */
    public int $parent_id;

    /**
     * @var int 评论等级
     */
    public int $rank;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var \DateTime 
     */
    public \DateTime $update_time;

    /**
     * @var string User Agent
     */
    public string $user_agent;

    /**
     * @var int 用户ID
     */
    public int $user_id;

    /**
     * @var string 用户昵称
     */
    public string $user_name;

    /**
     * 获取评论内容
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * 设置评论内容
     */
    public function setComment(string $value): void
    {
        $this->comment = $value;
    }

    /**
     * 获取内容ID
     */
    public function getContentId(): int
    {
        return $this->content_id;
    }

    /**
     * 设置内容ID
     */
    public function setContentId(int $value): void
    {
        $this->content_id = $value;
    }

    /**
     * 获取
     */
    public function getCreateTime(): \DateTime
    {
        return $this->create_time;
    }

    /**
     * 设置
     */
    public function setCreateTime(\DateTime $value): void
    {
        $this->create_time = $value;
    }

    /**
     * 获取
     */
    public function getDeleteTime(): \DateTime
    {
        return $this->delete_time;
    }

    /**
     * 设置
     */
    public function setDeleteTime(\DateTime $value): void
    {
        $this->delete_time = $value;
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
     * 获取IP地址
     */
    public function getIpAddress(): string
    {
        return $this->ip_address;
    }

    /**
     * 设置IP地址
     */
    public function setIpAddress(string $value): void
    {
        $this->ip_address = $value;
    }

    /**
     * 获取父级的ID
     */
    public function getParentId(): int
    {
        return $this->parent_id;
    }

    /**
     * 设置父级的ID
     */
    public function setParentId(int $value): void
    {
        $this->parent_id = $value;
    }

    /**
     * 获取评论等级
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * 设置评论等级
     */
    public function setRank(int $value): void
    {
        $this->rank = $value;
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
    public function getUpdateTime(): \DateTime
    {
        return $this->update_time;
    }

    /**
     * 设置
     */
    public function setUpdateTime(\DateTime $value): void
    {
        $this->update_time = $value;
    }

    /**
     * 获取User Agent
     */
    public function getUserAgent(): string
    {
        return $this->user_agent;
    }

    /**
     * 设置User Agent
     */
    public function setUserAgent(string $value): void
    {
        $this->user_agent = $value;
    }

    /**
     * 获取用户ID
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * 设置用户ID
     */
    public function setUserId(int $value): void
    {
        $this->user_id = $value;
    }

    /**
     * 获取用户昵称
     */
    public function getUserName(): string
    {
        return $this->user_name;
    }

    /**
     * 设置用户昵称
     */
    public function setUserName(string $value): void
    {
        $this->user_name = $value;
    }

}