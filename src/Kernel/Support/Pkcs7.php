<?php
declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 14:45
 */

namespace EasyDingTalk\Kernel\Support;

use EasyDingTalk\Kernel\Exceptions\InvalidArgumentException;

class Pkcs7
{
    /**
     * @throws InvalidArgumentException
     */
    public static function padding(string $contents, int $blockSize): string
    {
        if ($blockSize > 256) {
            throw new InvalidArgumentException('$blockSize may not be more than 256');
        }
        $padding = $blockSize - (strlen($contents) % $blockSize);
        $pattern = chr($padding);

        return $contents.str_repeat($pattern, $padding);
    }

    public static function unpadding(string $contents, int $blockSize): string
    {
        $pad = ord(substr($contents, -1));
        if ($pad < 1 || $pad > $blockSize) {
            $pad = 0;
        }

        return substr($contents, 0, (strlen($contents) - $pad));
    }
}