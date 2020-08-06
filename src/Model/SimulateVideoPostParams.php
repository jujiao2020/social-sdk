<?php declare(strict_types=1);

namespace Jcsp\SocialSdk\Model;


/**
 * 模拟登录视频发布参数
 * Class SimulatePostVideoParams
 * @package Jcsp\SocialSdk\Model
 */
class SimulateVideoPostParams
{
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
     * 视频描述
     * @var string
     */
    private $description = '';

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

}