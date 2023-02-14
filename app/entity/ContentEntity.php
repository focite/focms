<?php // Code generated by gen:dao CLI tool. DO NOT EDIT.

declare(strict_types=1);

namespace app\entity;

class ContentEntity
{

    /**
     * @var string 附件
     */
    public string $attachment;

    /**
     * @var string 编辑人员
     */
    public string $author;

    /**
     * @var string 描述
     */
    public string $content;

    /**
     * @var \DateTime 
     */
    public \DateTime $create_time;

    /**
     * @var \DateTime 
     */
    public \DateTime $delete_time;

    /**
     * @var string 描述
     */
    public string $description;

    /**
     * @var string JSON内容扩展
     */
    public string $extension;

    /**
     * @var int 
     */
    public int $id;

    /**
     * @var string 图片
     */
    public string $image;

    /**
     * @var int 内容类型:1站内,2站外
     */
    public int $in_station;

    /**
     * @var string 简介
     */
    public string $intro;

    /**
     * @var string 关键词
     */
    public string $keywords;

    /**
     * @var int 父级的ID
     */
    public int $parent_id;

    /**
     * @var string 模型类型
     */
    public string $pattern_code;

    /**
     * @var int 模型ID
     */
    public int $pattern_id;

    /**
     * @var string 站外链接
     */
    public string $redirect_url;

    /**
     * @var string URL PathInfo
     */
    public string $slug;

    /**
     * @var int 排序
     */
    public int $sort;

    /**
     * @var int 状态:1正常,2禁用
     */
    public int $status;

    /**
     * @var string 详情模板
     */
    public string $template_detail;

    /**
     * @var string 频道模板
     */
    public string $template_index;

    /**
     * @var string 列表模板
     */
    public string $template_list;

    /**
     * @var string 标题
     */
    public string $title;

    /**
     * @var \DateTime 
     */
    public \DateTime $update_time;

    /**
     * 获取附件
     */
    public function getAttachment(): string
    {
        return $this->attachment;
    }

    /**
     * 设置附件
     */
    public function setAttachment(string $value): void
    {
        $this->attachment = $value;
    }

    /**
     * 获取编辑人员
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * 设置编辑人员
     */
    public function setAuthor(string $value): void
    {
        $this->author = $value;
    }

    /**
     * 获取描述
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * 设置描述
     */
    public function setContent(string $value): void
    {
        $this->content = $value;
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
     * 获取JSON内容扩展
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * 设置JSON内容扩展
     */
    public function setExtension(string $value): void
    {
        $this->extension = $value;
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
     * 获取图片
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * 设置图片
     */
    public function setImage(string $value): void
    {
        $this->image = $value;
    }

    /**
     * 获取内容类型:1站内,2站外
     */
    public function getInStation(): int
    {
        return $this->in_station;
    }

    /**
     * 设置内容类型:1站内,2站外
     */
    public function setInStation(int $value): void
    {
        $this->in_station = $value;
    }

    /**
     * 获取简介
     */
    public function getIntro(): string
    {
        return $this->intro;
    }

    /**
     * 设置简介
     */
    public function setIntro(string $value): void
    {
        $this->intro = $value;
    }

    /**
     * 获取关键词
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * 设置关键词
     */
    public function setKeywords(string $value): void
    {
        $this->keywords = $value;
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
     * 获取模型类型
     */
    public function getPatternCode(): string
    {
        return $this->pattern_code;
    }

    /**
     * 设置模型类型
     */
    public function setPatternCode(string $value): void
    {
        $this->pattern_code = $value;
    }

    /**
     * 获取模型ID
     */
    public function getPatternId(): int
    {
        return $this->pattern_id;
    }

    /**
     * 设置模型ID
     */
    public function setPatternId(int $value): void
    {
        $this->pattern_id = $value;
    }

    /**
     * 获取站外链接
     */
    public function getRedirectUrl(): string
    {
        return $this->redirect_url;
    }

    /**
     * 设置站外链接
     */
    public function setRedirectUrl(string $value): void
    {
        $this->redirect_url = $value;
    }

    /**
     * 获取URL PathInfo
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * 设置URL PathInfo
     */
    public function setSlug(string $value): void
    {
        $this->slug = $value;
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
     * 获取详情模板
     */
    public function getTemplateDetail(): string
    {
        return $this->template_detail;
    }

    /**
     * 设置详情模板
     */
    public function setTemplateDetail(string $value): void
    {
        $this->template_detail = $value;
    }

    /**
     * 获取频道模板
     */
    public function getTemplateIndex(): string
    {
        return $this->template_index;
    }

    /**
     * 设置频道模板
     */
    public function setTemplateIndex(string $value): void
    {
        $this->template_index = $value;
    }

    /**
     * 获取列表模板
     */
    public function getTemplateList(): string
    {
        return $this->template_list;
    }

    /**
     * 设置列表模板
     */
    public function setTemplateList(string $value): void
    {
        $this->template_list = $value;
    }

    /**
     * 获取标题
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * 设置标题
     */
    public function setTitle(string $value): void
    {
        $this->title = $value;
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

}