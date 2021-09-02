<?php
namespace App\Utilities\Extensions;

use App\Utilities\Text;

class CssFile implements Validatable
{

    const EXTENSION = '.css';

    public static function validate(string $route): string
    {
        return Text::changeTextByString($route, self::EXTENSION);
    }
}