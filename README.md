# simplecrypt

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/martinusso/simplecrypt/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/martinusso/simplecrypt/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/martinusso/simplecrypt/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/martinusso/simplecrypt/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/martinusso/simplecrypt/badges/build.png?b=master)](https://scrutinizer-ci.com/g/martinusso/simplecrypt/build-status/master)

Encrypts and decrypts data using PHP with OpenSSL

## Installation

`composer require martinusso/simplecrypt`

## Usage

```
$password = "simplecrypt";

$secretKey = 'SECRET_KEY';
$secretIV = 'SECRET_IV';

$simpleCrypt = new SimpleCrypt($secretKey, $secretIV);

$encryptedPassword = $simpleCrypt->encrypt($password);
// $encryptedPassword = 'VGU4aUJiM1dZWmhHaDNGUUlnd05vUT09'
$decryptedPassword = $simpleCrypt->decrypt($encryptedPassword);
// $decryptedPassword = 'simplecrypt'
```

## License

This software is open source, licensed under the The MIT License (MIT). See [LICENSE](https://github.com/martinusso/simplecrypt/blob/master/LICENSE) for details.
