<?php

namespace Gladx\Finglish\Rules;

class FarsiCharacter implements Rule
{
    private static $alphabet = [
        'ا' => 'a',
        'آ' => 'a',
        'ب' => 'b',
        'پ' => 'p',
        'ت' => 't',
        'ث' => 's',
        'ج' => 'j',
        'چ' => 'ch',
        'ح' => 'h',
        'خ' => 'kh',
        'د' => 'd',
        'ذ' => 'z',
        'ر' => 'r',
        'ز' => 'z',
        'ژ' => 'zh',
        'س' => 's',
        'ش' => 'sh',
        'ص' => 's',
        'ض' => 'z',
        'ط' => 't',
        'ظ' => 'z',
        'ع' => 'a',
        'غ' => 'gh',
        'ف' => 'f',
        'ق' => 'gh',
        'ک' => 'k',
        'گ' => 'g',
        'ل' => 'l',
        'م' => 'm',
        'ن' => 'n',
        'و' => 'v',
        'ه' => 'h',
        'ی' => 'y',
    ];

    private static $numbers = [
        '۰' => '0',
        '۱' => '1',
        '۲' => '2',
        '۳' => '3',
        '۴' => '4',
        '۵' => '5',
        '۶' => '6',
        '۷' => '7',
        '۸' => '8',
        '۹' => '9',
    ];

    public static function apply(string $text) : string
    {
        $farsiCharcters = array_merge(self::$alphabet, self::$numbers);
        $textCharacterArray = mb_str_split($text);
        $translate = "";
        foreach($textCharacterArray as $ch) {
            $translate .= $farsiCharcters[$ch] ?? $ch;
        }
        return $translate;
    }
}
