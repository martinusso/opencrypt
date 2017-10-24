<?php

namespace OpenCrypt\Tests;

use OpenCrypt\OpenCrypt;

final class OpenCryptTest extends \PHPUnit\Framework\TestCase
{
    public function testCrypt()
    {
        $password = "OpenCrypt";

        $openCrypt = new OpenCrypt('1', '2');

        $encryptedPassword = $openCrypt->encrypt($password);
        $this->assertEquals('RTZPSEUybDZLZy9lSzYwaHk1Y0gxZz09', $encryptedPassword);

        $decryptedPassword = $openCrypt->decrypt($encryptedPassword);
        $this->assertEquals($password, $decryptedPassword);
    }
}
