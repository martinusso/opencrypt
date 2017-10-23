<?php

namespace SimpleCrypt\Tests;

use SimpleCrypt\SimpleCrypt;

final class SimpleCryptTest extends \PHPUnit\Framework\TestCase
{
    public function testCrypt()
    {
        $password = "simplecrypt";

        $simpleCrypt = new SimpleCrypt('1', '2');

        $encryptedPassword = $simpleCrypt->encrypt($password);
        $this->assertEquals('VGU4aUJiM1dZWmhHaDNGUUlnd05vUT09', $encryptedPassword);

        $decryptedPassword = $simpleCrypt->decrypt($encryptedPassword);
        $this->assertEquals($password, $decryptedPassword);
    }
}
