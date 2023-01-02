<?php
declare(strict_types=1);
/**
 * Created by : PhpStorm
 * User: Jermine
 * Date: 2022/12/26
 * Time: 14:43
 */

namespace EasyDingTalk\Tests;

use EasyDingTalk\Kernel\Encryptor;
use EasyDingTalk\Kernel\Support\Xml;
use Nyholm\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function tearDown(): void
    {
        parent::tearDown();
        if ($container = \Mockery::getContainer()) {
            $this->addToAssertionCount($container->Mockery_getExpectationCount());
        }
        \Mockery::close();
    }

    public function createEncryptedXmlMessageRequest($plainMessageXml, Encryptor $encryptor, array $query = []): ServerRequest
    {
        $body = $encryptor->encrypt($plainMessageXml);

        $xml = Xml::parse($body);

        return (new ServerRequest('POST', 'http://easydingtalk.cc/server', [], $body))->withQueryParams([
            'msg_signature' => $xml['MsgSignature'],
            'timestamp' => $xml['TimeStamp'],
            'nonce' => $xml['Nonce'],
            ...$query,
        ]);
    }
}