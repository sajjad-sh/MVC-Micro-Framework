<?php

namespace app\utils;

class Cookie
{

    const LIFE_TIME = 3600;
    const PATH = "/";
    
    public static function set(string $key, string $value = "", int $life_time = 3600)
    {
        return setcookie($key, $value, [
            'expires' => time() + $life_time,
            'path' => self::PATH
        ]);
    }

    public static function get(string $key)
    {
        return $_COOKIE[$key] ?? false;
    }
}
