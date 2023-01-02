<?php
declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 14:47
 */

namespace EasyDingTalk\Kernel\Support;

use TheNorthMemory\Xml\Transformer;

class Xml
{
    public static function parse(string $xml): array|null
    {
        return Transformer::toArray($xml);
    }

    public static function build(array $data): string
    {
        return Transformer::toXml($data);
    }
}