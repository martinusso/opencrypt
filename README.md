# opencrypt

[![Build Status](https://travis-ci.org/martinusso/opencrypt.svg?branch=master)](https://travis-ci.org/martinusso/opencrypt)
[![Build Status](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/build.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/martinusso/opencrypt/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/martinusso/opencrypt/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/martinusso/opencrypt/v/stable)](https://packagist.org/packages/martinusso/opencrypt)
[![Latest Unstable Version](https://poser.pugx.org/martinusso/opencrypt/v/unstable)](https://packagist.org/packages/martinusso/opencrypt)
[![License](https://poser.pugx.org/martinusso/opencrypt/license)](https://packagist.org/packages/martinusso/opencrypt)
[![composer.lock](https://poser.pugx.org/martinusso/opencrypt/composerlock)](https://packagist.org/packages/martinusso/opencrypt)

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
