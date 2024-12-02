<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Crypt;

class UrlEncrypter
{
    private static $cipher = 'AES-256-CBC';
    private static $key;

    private static function getKey()
    {
        
        if (empty(self::$key)) {
            self::$key = config('app.key');
        }
        return self::$key;
    }

    public static function encryptUserId($userId)
    {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$cipher));
        $encrypted = openssl_encrypt($userId, self::$cipher, self::getKey(), 0, $iv);
        return base64_encode($iv . $encrypted);
    }

    public static function decryptUserId($encryptedUserId)
    {
        $data = base64_decode($encryptedUserId);
        $iv = substr($data, 0, openssl_cipher_iv_length(self::$cipher));
        $encrypted = substr($data, openssl_cipher_iv_length(self::$cipher));
        return openssl_decrypt($encrypted, self::$cipher, self::getKey(), 0, $iv);
    }
}

