<?php

namespace OpenCrypt;

class OpenCrypt
{
    /**
    * The cipher method. For a list of available cipher methods, use openssl_get_cipher_methods().
    */
    const CIPHER_METHOD = "AES-256-CBC";

    /**
     * The key
     *
     * Should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
     */
    private $secretKey;

    /**
     * IV - A non-NULL Initialization Vector.
     *
     * Encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
     */
    private $secretIV;

    public function __construct(
        string $secretKey,
        string $secretIV
    ) {
        $this->secretKey = hash('sha256', $secretKey);
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
