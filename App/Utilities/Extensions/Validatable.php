<?php

namespace App\Utilities\Extensions;

interface Validatable
{
    public static function validate(string $route) : string;
}