<?php
declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 11:42
 */

namespace EasyDingTalk\Kernel\Contracts;

interface Jsonable
{
    public function toJson(): string|false;
}