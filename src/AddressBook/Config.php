<?php
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/31
 * Time: 11:36
 */
declare(strict_types=1);

namespace EasyDingTalk\AddressBook;

class Config extends \EasyDingTalk\Kernel\Config
{
    /**
     * @var array<string>
     */
    protected array $requiredKeys = [
        'app_id',
    ];
}