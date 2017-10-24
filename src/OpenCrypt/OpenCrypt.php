<?php

namespace OpenCrypt;

class OpenCrypt
{
    private $encryptMethod = "AES-256-CBC";
    private $secretKey;
    private $secretIV;

    public function __construct(
        string $secretKey,
        string $secretIV
    ) {
        // hash
        $this->secretKey = hash('sha256', $secretKey);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $this->secretIV = substr(hash('sha256', $secretIV), 0, 16);
    }

    public function encrypt($value) {
        $output = openssl_encrypt(
            $value,
            $this->encryptMethod,
            $this->secretKey,
            0,
            $this->secretIV
        );
        return base64_encode($output);
    }

    public function decrypt($value) {
        return openssl_decrypt(
            base64_decode($value),
            $this->encryptMethod,
            $this->secretKey,
            0,
            $this->secretIV
        );
    }
}
