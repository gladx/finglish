<?php

namespace Gladx\Finglish\Rules;

class Wiki implements Rule
{
    public static function apply(string $text) : string
    {
        $wiki = require __DIR__ . DIRECTORY_SEPARATOR . '..' 
            . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'dics' . DIRECTORY_SEPARATOR . 'wiki.php';
        return strtr($text, $wiki);
    }
}
