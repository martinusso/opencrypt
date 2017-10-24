<?php

namespace OpenCrypt\Tests;

use OpenCrypt\OpenCrypt;

final class OpenCryptTest extends \PHPUnit\Framework\TestCase
{
    public function testCrypt()
    {
        $secretKey = 'ec3a85570a2b2122ad835984ba12e91f';
        $iv = base64_decode('hEHLyH4Irwqvnl8uJpHrnQ==');
        $password = "OpenCrypt";

        $openCrypt = new OpenCrypt($secretKey, $iv);
        $this->assertEquals($iv, $openCrypt->iv());

        $encryptedPassword = $openCrypt->encrypt($password);

        $this->assertEquals('QDWPv3lyx9LaKuxIgIXooA==', $encryptedPassword);

        $decryptedPassword = $openCrypt->decrypt($encryptedPassword);
        $this->assertEquals($password, $decryptedPassword);
    }

    public function testGeneratingIV()
    {
        $secretKey = 'ec3a85570a2b2122ad835984ba12e91f';
        $password = "OpenCrypt";

        $openCrypt = new OpenCrypt($secretKey);
        $iv = $openCrypt->iv();
        $this->assertEquals(16, strlen($iv));
    }

    public function testGenerateKey()
    {
        $key = OpenCrypt::generateKey();
        $this->assertEquals(1024, strlen($key));
    }
}
