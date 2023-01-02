<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 17:57
 */
declare(strict_types=1);

namespace EasyDingTalk\Kernel\Contracts;

interface RefreshableAccessToken extends AccessToken
{
    public function refresh(): string;
}