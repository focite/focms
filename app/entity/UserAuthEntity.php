<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class UserAuthEntity
{

    /**
     * @var string 
     */
    public string $create_time;

    /**
     * @var string 凭证:密码或token
     */
    public string $credential;

    /**
     * @var string 
     */
    public string $delete_time;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string 唯一标识:如手机号码,电子邮箱,openid
     */
    public string $identifier;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var string 凭证类型:mobile,email,wechat
     */
    public string $type;

    /**
     * @var string 
     */
    public string $update_time;

    /**
     * @var int 用户ID
     */
    public int $user_id;

    /**
     * @var string 验证时间
     */
    public string $verified_time;

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
     * 获取凭证:密码或token
     */
    public function getCredential(): string
    {
        return $this->credential;
    }

    /**
     * 设置凭证:密码或token
     */
    public function setCredential(string $value): void
    {
        $this->credential = $value;
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
     * 获取唯一标识:如手机号码,电子邮箱,openid
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * 设置唯一标识:如手机号码,电子邮箱,openid
     */
    public function setIdentifier(string $value): void
    {
        $this->identifier = $value;
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
     * 获取凭证类型:mobile,email,wechat
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * 设置凭证类型:mobile,email,wechat
     */
    public function setType(string $value): void
    {
        $this->type = $value;
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
     * 获取验证时间
     */
    public function getVerifiedTime(): string
    {
        return $this->verified_time;
    }

    /**
     * 设置验证时间
     */
    public function setVerifiedTime(string $value): void
    {
        $this->verified_time = $value;
    }

}