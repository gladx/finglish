<?php

namespace Gladx\Finglish;

use Gladx\Finglish\Rules\Custom;
use Gladx\Finglish\Rules\FarsiCharacter;
use Gladx\Finglish\Rules\Wiki;

class Finglish
{
    private static $rules =   [
        Custom::class,
        Wiki::class,
        FarsiCharacter::class,
    ];

    public static function t(string $text): string
    {
        foreach (self::$rules as $rule) {
            $text = $rule::apply($text);
        }

        return $text;
    }

    public static function setCustom($dics) {
        Custom::setCustomDic($dics);
    }
}
