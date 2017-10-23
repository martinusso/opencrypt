<?php

namespace SimpleCrypt\Tests;

use SimpleCrypt\SimpleCrypt;

final class SimpleCryptTest extends \PHPUnit\Framework\TestCase
{
    public function testCrypt()
    {
        $password = "senha";

        $simpleCrypt = new SimpleCrypt('1', '2');

        $encryptedPassword = $simpleCrypt->encrypt($password);
        $this->assertEquals('eG9aTkxqVzM5M05nNFhnL0dkKzBtQT09', $encryptedPassword);

        $decryptedPassword = $simpleCrypt->decrypt($encryptedPassword);
        $this->assertEquals($password, $decryptedPassword);
    }
}
