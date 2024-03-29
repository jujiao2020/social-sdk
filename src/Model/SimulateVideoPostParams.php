<?php declare(strict_types=1);

namespace Jcsp\SocialSdk\Model;


/**
 * 模拟登录视频发布参数
 * Class SimulatePostVideoParams
 * @package Jcsp\SocialSdk\Model
 */
class SimulateVideoPostParams
{
    // 账号类型
    /** @var int 官方账号 */
    const ACCOUNT_TYPE_OFFICIAL = 0;
    /** @var int 个人账号 */
    const ACCOUNT_TYPE_USER = 1;

    /**
     * 社媒英文名称
     * @var string
     */
    private $socialMediaName = '';

    /**
     * 视频url
     * @var string
     */
    private $videoUrl = '';

    /**
     * 视频标题
     * @var string
     */
    private $title = '';

    /**
     * 视频关键词
     * @var string
     */
    private $keywords = '';

    /**
     * 视频描述
     * @var string
     */
    private $description = '';

    /**
     * 视频缩略图URL
     * @var string
     */
    private $thumbnailUrl = '';

    /**
     * 视频官网url
     * @var string
     */
    private $videoWebSiteUrl = '';

    /**
     * 回调url
     * @var string
     */
    private $callbackUrl = '';

    /**
     * 发布账号
     * @var string
     */
    private $account = '';

    /**
     * 社媒id
     * @var string
     */
    private $socialId = '';

    /**
     * 是否是分享到 channel（不是的话就分享到 user）
     * @var bool
     */
    private $isShareToChannel = false;

    /**
     * 账号类型（0：官方账号，1：个人账号）
     * @var int
     */
    private $account_type = 0;

    /**
     * @return string
     */
    public function getSocialMediaName(): string
    {
        return $this->socialMediaName;
    }

    /**
     * @param string $socialMediaName
     */
    public function setSocialMediaName(string $socialMediaName): void
    {
        $this->socialMediaName = $socialMediaName;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     */
    public function setVideoUrl(string $videoUrl): void
    {
        $this->videoUrl = $videoUrl;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords): void
    {
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     */
    public function setThumbnailUrl(string $thumbnailUrl): void
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    /**
     * @return string
     */
    public function getVideoWebSiteUrl(): string
    {
        return $this->videoWebSiteUrl;
    }

    /**
     * @param string $videoWebSiteUrl
     */
    public function setVideoWebSiteUrl(string $videoWebSiteUrl): void
    {
        $this->videoWebSiteUrl = $videoWebSiteUrl;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     */
    public function setAccount(string $account): void
    {
        $this->account = $account;
    }

    /**
     * @return string
     */
    public function getSocialId(): string
    {
        return $this->socialId;
    }

    /**
     * @param string $socialId
     */
    public function setSocialId(string $socialId): void
    {
        $this->socialId = $socialId;
    }

    /**
     * @return bool
     */
    public function getIsShareToChannel(): bool
    {
        return $this->isShareToChannel;
    }

    /**
     * @param bool $isShareToChannel
     */
    public function setIsShareToChannel(bool $isShareToChannel): void
    {
        $this->isShareToChannel = $isShareToChannel;
    }

    /**
     * @return int
     */
    public function getAccountType(): int
    {
        return $this->account_type;
    }

    /**
     * @param int $account_type
     */
    public function setAccountType(int $account_type): void
    {
        $this->account_type = $account_type;
    }

}