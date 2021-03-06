<?php declare(strict_types=1);

namespace Jcsp\SocialSdk;


use Jcsp\SocialSdk\Cache\Session;
use Jcsp\SocialSdk\Client\AbstractClient;
use Jcsp\SocialSdk\Client\ClientProxy;
use Jcsp\SocialSdk\Contract\AuthorizationInterface;
use Jcsp\SocialSdk\Contract\CacheInterface;
use Jcsp\SocialSdk\Contract\LoggerInterface;
use Jcsp\SocialSdk\Contract\ShareInterface;
use Jcsp\SocialSdk\Contract\SimulateInterface;
use Jcsp\SocialSdk\Contract\UserInterface;
use Jcsp\SocialSdk\Exception\SocialSdkException;
use Jcsp\SocialSdk\Log\NoLog;
use Jcsp\SocialSdk\Simulate\SimulateClient;

class ClientFactory
{

    /**
     * @var CacheInterface
     */
    private $cache;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var array
     */
    private $config;

    /**
     * ClientFactory constructor.
     * @param array $config
     * @throws SocialSdkException
     */
    public function __construct(array $config)
    {
        // 读取默认配置
        $defaultConfig = require __DIR__ . "/../config/config.php";

        // 合并配置
        $config = array_merge($defaultConfig, $config);
        $this->config = $config;

        // 获取缓存处理
        $cache = $config['cache'] ?? Session::class;
        if (is_string($cache)) {
            $cache = new $cache();
        }
        if (!$cache instanceof CacheInterface) {
            throw new SocialSdkException("Cache must be the instance of CacheInterface");
        }
        $this->cache = $cache;

        // 获取日志处理
        $logger = $config['logger'] ?? NoLog::class;
        if (is_string($logger)) {
            $logger = new $logger();
        }
        if (!$logger instanceof LoggerInterface) {
            throw new SocialSdkException("Logger must be the instance of LoggerInterface");
        }
        $this->logger = $logger;
    }

    /**
     * 创建社媒客户端
     * @param string $socialMediaName 社媒英文名称
     * @return AbstractClient|ShareInterface|UserInterface|AuthorizationInterface|ClientProxy
     * @throws SocialSdkException
     */
    public function createClient(string $socialMediaName): ClientProxy
    {
        $socialMediaName = strtoupper($socialMediaName[0]) . substr($socialMediaName, 1, strlen($socialMediaName) - 1);
        if (empty($socialMediaName)) {
            throw new SocialSdkException("Social media can not be empty");
        }
        $fullClientName = "\\Jcsp\\SocialSdk\\Client\\{$socialMediaName}";
        if (!class_exists($fullClientName)) {
            throw new SocialSdkException("No match social media '{$socialMediaName}'");
        }
        $client = new $fullClientName($this->cache, $this->logger, $this->config['temp_storage_path'] ?? '');
        if (!$client instanceof AbstractClient) {
            throw new SocialSdkException("No match social media '{$socialMediaName}'");
        }

        return new ClientProxy($client);
    }

    /**
     * 创建社媒模拟登录客户端
     * @return SimulateInterface|ClientProxy
     */
    public function createSimulateClient(): ClientProxy
    {
        $config = $this->config['simulate'] ?? [];
        $client = new SimulateClient($this->logger, $config);
        return new ClientProxy($client);
    }

}
