<?php

namespace OpenCrypt;

class OpenCrypt
{
    /**
     * The cipher method. For a list of available cipher methods, use openssl_get_cipher_methods()
     */
    const CIPHER_METHOD = "AES-256-CBC";

    /**
     * When OPENSSL_RAW_DATA is specified, the returned data is returned as-is.
     */
    const OPTIONS = OPENSSL_RAW_DATA;

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
    private $iv;

    public function __construct(
        string $secretKey,
        string $iv = null
    ) {
        $this->secretKey = hash('sha256', $secretKey);

        $this->iv = $iv ?: self::generateIV();
    }

    public function encrypt(string $value) {
        $output = openssl_encrypt(
            $value,
            self::CIPHER_METHOD,
            $this->secretKey,
            self::OPTIONS,
            $this->iv
        );
        return base64_encode($output);
    }

    public function decrypt(string $value) {
        return openssl_decrypt(
            base64_decode($value),
            self::CIPHER_METHOD,
            $this->secretKey,
            self::OPTIONS,
            $this->iv
        );
    }

    public function iv()
    {
        return $this->iv;
    }

    /**
     * Generate IV
     *
     * @return int Returns a string of pseudo-random bytes, with the number of bytes expected by the method AES-256-CBC
     */
    public static function generateIV()
    {
        $ivNumBytes = openssl_cipher_iv_length(self::CIPHER_METHOD);
        return openssl_random_pseudo_bytes($ivNumBytes);
    }

    /**
     * Generate a key
     *
     * @param int $length The length of the desired string of bytes. Must be a positive integer.
     *
     * @return int Returns the hexadecimal representation of a binary data
     */
    public static function generateKey($length = 512)
    {
        $bytes = openssl_random_pseudo_bytes($length);
        return bin2hex($bytes);
    }
}
