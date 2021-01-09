<?php

namespace Gladx\Finglish\Rules;

interface Rule
{
    public static function apply(string $text) : string;
}
