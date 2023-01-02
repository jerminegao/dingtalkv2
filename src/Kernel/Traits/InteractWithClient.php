<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/31
 * Time: 10:45
 */

namespace EasyDingTalk\Kernel\Traits;

use EasyDingTalk\Kernel\HttpClient\AccessTokenAwareClient;

trait InteractWithClient
{
    protected ?AccessTokenAwareClient $client = null;

    public function getClient(): AccessTokenAwareClient
    {
        if (! $this->client) {
            $this->client = $this->createClient();
        }

        return $this->client;
    }

    public function setClient(AccessTokenAwareClient $client): static
    {
        $this->client = $client;

        return $this;
    }

    abstract public function createClient(): AccessTokenAwareClient;
}