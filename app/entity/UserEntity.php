<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class UserEntity
{

    /**
     * @var string 头像
     */
    public string $avatar;

    /**
     * @var string 生日
     */
    public string $birthday;

    /**
     * @var string 
     */
    public string $create_time;

    /**
     * @var string 
     */
    public string $delete_time;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var int 是否为管理员:1是,2否
     */
    public int $is_admin;

    /**
     * @var string 昵称
     */
    public string $name;

    /**
     * @var string 登录用户密码
     */
    public string $password;

    /**
     * @var string 用户密码盐值
     */
    public string $password_salt;

    /**
     * @var string Remember Token
     */
    public string $remember_token;

    /**
     * @var string 密码重置token
     */
    public string $reset_token;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var string 
     */
    public string $update_time;

    /**
     * @var string 登录用户名
     */
    public string $username;

    /**
     * 获取头像
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * 设置头像
     */
    public function setAvatar(string $value): void
    {
        $this->avatar = $value;
    }

    /**
     * 获取生日
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * 设置生日
     */
    public function setBirthday(string $value): void
    {
        $this->birthday = $value;
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
     * 获取是否为管理员:1是,2否
     */
    public function getIsAdmin(): int
    {
        return $this->is_admin;
    }

    /**
     * 设置是否为管理员:1是,2否
     */
    public function setIsAdmin(int $value): void
    {
        $this->is_admin = $value;
    }

    /**
     * 获取昵称
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 设置昵称
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * 获取登录用户密码
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * 设置登录用户密码
     */
    public function setPassword(string $value): void
    {
        $this->password = $value;
    }

    /**
     * 获取用户密码盐值
     */
    public function getPasswordSalt(): string
    {
        return $this->password_salt;
    }

    /**
     * 设置用户密码盐值
     */
    public function setPasswordSalt(string $value): void
    {
        $this->password_salt = $value;
    }

    /**
     * 获取Remember Token
     */
    public function getRememberToken(): string
    {
        return $this->remember_token;
    }

    /**
     * 设置Remember Token
     */
    public function setRememberToken(string $value): void
    {
        $this->remember_token = $value;
    }

    /**
     * 获取密码重置token
     */
    public function getResetToken(): string
    {
        return $this->reset_token;
    }

    /**
     * 设置密码重置token
     */
    public function setResetToken(string $value): void
    {
        $this->reset_token = $value;
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
     * 获取登录用户名
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * 设置登录用户名
     */
    public function setUsername(string $value): void
    {
        $this->username = $value;
    }

}