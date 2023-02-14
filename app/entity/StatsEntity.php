<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class StatsEntity
{

    /**
     * @var \DateTime 请求日期
     */
    public \DateTime $access_time;

    /**
     * @var string 请求url地址
     */
    public string $access_url;

    /**
     * @var string 地区
     */
    public string $area;

    /**
     * @var string 浏览器
     */
    public string $browser;

    /**
     * @var \DateTime 
     */
    public \DateTime $create_time;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string IP地址
     */
    public string $ip_address;

    /**
     * @var string 语言
     */
    public string $language;

    /**
     * @var string 来源域名
     */
    public string $referer_domain;

    /**
     * @var string 来源地址
     */
    public string $referer_path;

    /**
     * @var string 操作系统
     */
    public string $system;

    /**
     * @var \DateTime 
     */
    public \DateTime $update_time;

    /**
     * @var int 请求次数
     */
    public int $visit_times;

    /**
     * 获取请求日期
     */
    public function getAccessTime(): \DateTime
    {
        return $this->access_time;
    }

    /**
     * 设置请求日期
     */
    public function setAccessTime(\DateTime $value): void
    {
        $this->access_time = $value;
    }

    /**
     * 获取请求url地址
     */
    public function getAccessUrl(): string
    {
        return $this->access_url;
    }

    /**
     * 设置请求url地址
     */
    public function setAccessUrl(string $value): void
    {
        $this->access_url = $value;
    }

    /**
     * 获取地区
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * 设置地区
     */
    public function setArea(string $value): void
    {
        $this->area = $value;
    }

    /**
     * 获取浏览器
     */
    public function getBrowser(): string
    {
        return $this->browser;
    }

    /**
     * 设置浏览器
     */
    public function setBrowser(string $value): void
    {
        $this->browser = $value;
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
     * 获取语言
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * 设置语言
     */
    public function setLanguage(string $value): void
    {
        $this->language = $value;
    }

    /**
     * 获取来源域名
     */
    public function getRefererDomain(): string
    {
        return $this->referer_domain;
    }

    /**
     * 设置来源域名
     */
    public function setRefererDomain(string $value): void
    {
        $this->referer_domain = $value;
    }

    /**
     * 获取来源地址
     */
    public function getRefererPath(): string
    {
        return $this->referer_path;
    }

    /**
     * 设置来源地址
     */
    public function setRefererPath(string $value): void
    {
        $this->referer_path = $value;
    }

    /**
     * 获取操作系统
     */
    public function getSystem(): string
    {
        return $this->system;
    }

    /**
     * 设置操作系统
     */
    public function setSystem(string $value): void
    {
        $this->system = $value;
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
     * 获取请求次数
     */
    public function getVisitTimes(): int
    {
        return $this->visit_times;
    }

    /**
     * 设置请求次数
     */
    public function setVisitTimes(int $value): void
    {
        $this->visit_times = $value;
    }

}