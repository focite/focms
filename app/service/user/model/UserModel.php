<?php

declare(strict_types=1);

namespace app\service\user\model;

class UserModel
{
    /**
     * 用户ID
     * @var int
     */
    private int $id;

    /**
     * 用户名
     * @var string
     */
    private string $username;

    /**
     * 用户登录密码
     * @var string
     */
    private string $password;

    /**
     * 登录密码盐值
     * @var string
     */
    private string $password_salt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPasswordSalt(): string
    {
        return $this->password_salt;
    }

    /**
     * @param string $password_salt
     */
    public function setPasswordSalt(string $password_salt): void
    {
        $this->password_salt = $password_salt;
    }

}
