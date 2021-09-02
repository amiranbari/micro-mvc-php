<?php
namespace App\Utilities\Extensions;

use App\Utilities\Text;

class JsFile implements Validatable
{

    const EXTENSION = '.js';

    public static function validate(string $route): string
    {
        return Text::changeTextByString($route, self::EXTENSION);
    }
}