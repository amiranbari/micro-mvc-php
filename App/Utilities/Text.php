<?php

namespace App\Utilities;

class Text
{
    public static function changeTextByString(string $text, string $work): string
    {
        if (!strpos($text, $work))
            $text = $text . $work;
        return $text;
    }
}