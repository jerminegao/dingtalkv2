<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/31
 * Time: 10:46
 */

namespace EasyDingTalk\Kernel\Traits;

use EasyDingTalk\Kernel\HttpClient\RequestUtil;
use function property_exists;
use Psr\Log\LoggerAwareInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

trait InteractWithHttpClient
{
    protected ?HttpClientInterface $httpClient = null;

    public function getHttpClient(): HttpClientInterface
    {
        if (! $this->httpClient) {
            $this->httpClient = $this->createHttpClient();
        }

        return $this->httpClient;
    }

    public function setHttpClient(HttpClientInterface $httpClient): static
    {
        $this->httpClient = $httpClient;

        if ($this instanceof LoggerAwareInterface && $httpClient instanceof LoggerAwareInterface
            && property_exists($this, 'logger')
            && $this->logger) {
            $httpClient->setLogger($this->logger);
        }

        return $this;
    }

    protected function createHttpClient(): HttpClientInterface
    {
        return HttpClient::create(RequestUtil::formatDefaultOptions($this->getHttpClientDefaultOptions()));
    }

    /**
     * @return array<string,mixed>
     */
    protected function getHttpClientDefaultOptions(): array
    {
        return [];
    }
}