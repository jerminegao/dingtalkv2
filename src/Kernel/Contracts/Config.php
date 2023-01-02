<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 10:28
 */

namespace EasyDingTalk\Kernel\Contracts;

use ArrayAccess;

interface Config extends ArrayAccess
{
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    public function set(string $key, mixed $value = null): void;

    public function get(array|string $key, mixed $default = null): mixed;
}