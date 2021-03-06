<?php declare(strict_types=1);


namespace Jcsp\SocialSdk\Contract;


use Jcsp\SocialSdk\Model\CommonResult;
use Jcsp\SocialSdk\Model\SimulateAccountBindVerificationParams;
use Jcsp\SocialSdk\Model\SimulateAccountBindParams;
use Jcsp\SocialSdk\Model\SimulateAccountBindInfo;
use Jcsp\SocialSdk\Model\SimulateBindAccountResult;
use Jcsp\SocialSdk\Model\SimulateVideoPostParams;
use Jcsp\SocialSdk\Model\SimulateAccount;
use Jcsp\SocialSdk\Model\SimulatePostTask;
use Jcsp\SocialSdk\Model\SimulateVideoPostTask;

interface SimulateInterface
{

    /**
     * 设置是否走测试场景
     * @param bool $isTest
     */
    public function setIsTest(bool $isTest): void;

    /**
     * 获取当前是否走测试场景
     * @return bool
     */
    public function getIsTest(): bool;

    /**
     * 模拟登录发布视频
     * @param SimulateVideoPostParams $params
     * @return SimulatePostTask
     */
    public function simPostVideo(SimulateVideoPostParams $params): SimulatePostTask;

    /**
     * 处理模拟登录发布回调处理
     * @param array $requestParams
     * @return SimulatePostTask
     */
    public function handleSimPostCallback(array $requestParams): SimulatePostTask;

    /**
     * 查询模拟登录视频发布的任务状态
     * @param string $taskId
     * @return SimulateVideoPostTask
     */
    public function queryTaskInfo(string $taskId): SimulateVideoPostTask;

    /**
     * 获取社媒发布官方账号列表
     * @return SimulateAccount[]
     */
    public function getAccountList(): array;

    /**
     * 绑定账号
     * @param SimulateAccountBindParams $params
     * @return SimulateBindAccountResult
     */
    public function bindAccount(SimulateAccountBindParams $params): SimulateBindAccountResult;

    /**
     * 账号绑定回调处理
     * @param array $requestParams
     * @return SimulateAccountBindInfo
     */
    public function handleBindProcessCallback(array $requestParams): SimulateAccountBindInfo;

    /**
     * 提交验证信息，某些社媒账号绑定需要
     * @param SimulateAccountBindVerificationParams $params
     * @return CommonResult
     */
    public function submitVerificationForAccountBinding(SimulateAccountBindVerificationParams $params): CommonResult;

    /**
     * 解绑账号
     * @param string $taskId
     * @return CommonResult
     */
    public function unbindAccount(string $taskId): CommonResult;

}