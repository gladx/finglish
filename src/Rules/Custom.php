<?php

namespace Gladx\Finglish\Rules;

class Custom implements Rule
{
    /**
     * @var array [['farsi' => 'english']]
     */
    private static $customDics = [];

    public static function apply(string $text) : string
    {
        foreach(self::$customDics as $dic) {
            $text = strtr($text, $dic);
        }

        return $text;
    }

    public static function setCustomDic($dics) {
        array_push(self::$customDics, $dics);
    }
}
