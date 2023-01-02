<?php
declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 17:40
 */

namespace EasyDingTalk\AddressBook\Contracts;

interface Account
{
    public function getAppId(): string;

    public function getSecret(): string;

    public function getToken(): ?string;

    public function getAesKey(): ?string;
}