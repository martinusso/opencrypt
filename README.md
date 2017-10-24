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

## Tips

  - *$secretKey* should have been previously generated in a cryptographically safe way, like [openssl_random_pseudo_bytes](http://php.net/manual/en/function.openssl-random-pseudo-bytes.php). OpenCrypt has the static method `OpenCrypt::generateKey()` for this.

## Usage

```
$password = "OpenCrypt";

// Should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
$secretKey = 'SECRET_KEY';

$iv = base64_decode('hEHLyH4Irwqvnl8uJpHrnQ==');

$openCrypt = new OpenCrypt($secretKey, $iv);

// encrypt
$encryptedPassword = $openCrypt->encrypt($password);
// $encryptedPassword = 'GWw3bqL7FqjmRs0yyIR/8A=='

// decrypt later....
$decryptedPassword = $openCrypt->decrypt($encryptedPassword);
// $decryptedPassword = 'OpenCrypt'
```

### generate IV
```
$iv = OpenCrypt::generateIV();
```

### generate key
```
$secretKey = OpenCrypt::generateKey();
```


## License

This software is open source, licensed under the The MIT License (MIT). See [LICENSE](https://github.com/martinusso/opencrypt/blob/master/LICENSE) for details.
