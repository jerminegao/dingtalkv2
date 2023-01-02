<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 17:42
 */
declare(strict_types=1);

namespace EasyDingTalk\AddressBook\Contracts;

use EasyDingTalk\Kernel\Contracts\AccessToken;
use EasyDingTalk\Kernel\Contracts\Config;
use EasyDingTalk\Kernel\Contracts\Server;
use EasyDingTalk\Kernel\Encryptor;
use EasyDingTalk\Kernel\HttpClient\AccessTokenAwareClient;
use Overtrue\Socialite\Contracts\ProviderInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\SimpleCache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

interface Application
{
    public function getAccount(): Account;

    public function getEncryptor(): Encryptor;

    public function getServer(): Server;

    public function getRequest(): ServerRequestInterface;

    public function getClient(): AccessTokenAwareClient;

    public function getHttpClient(): HttpClientInterface;

    public function getConfig(): Config;

    public function getAccessToken(): AccessToken;

    public function getCache(): CacheInterface;

    public function getOAuth(): ProviderInterface;

    public function setOAuthFactory(callable $factory): static;
}