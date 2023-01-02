<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/31
 * Time: 10:36
 */
declare(strict_types=1);

namespace EasyDingTalk\Kernel\Contracts;

interface Arrayable
{
    public function toArray(): array;
}