# opencrypt

[![Build Status](https://travis-ci.org/martinusso/opencrypt.svg?branch=master)](https://travis-ci.org/martinusso/opencrypt)
[![Build Status](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/build.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/?branch=master)

Encrypts and decrypts data using PHP with OpenSSL

## Installation

`composer require martinusso/opencrypt`

## Usage

```
$password = "OpenCrypt";

$secretKey = 'SECRET_KEY';
$secretIV = 'SECRET_IV';

$openCrypt = new OpenCrypt($secretKey, $secretIV);

$encryptedPassword = $openCrypt->encrypt($password);
// $encryptedPassword = 'RTZPSEUybDZLZy9lSzYwaHk1Y0gxZz09'
$decryptedPassword = $openCrypt->decrypt($encryptedPassword);
// $decryptedPassword = 'OpenCrypt'
```

## License

This software is open source, licensed under the The MIT License (MIT). See [LICENSE](https://github.com/martinusso/opencrypt/blob/master/LICENSE) for details.
