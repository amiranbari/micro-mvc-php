<?php
namespace App\Utilities;

use App\Utilities\Extensions\CssFile;
use App\Utilities\Extensions\JsFile;

class Asset
{
    const CSS_FOLDER = 'css';
    const JS_FOLDER  = 'js';

    public static function get(string $route)
    {
        return $_ENV['APP_URL'] . 'assets/' . $route;
    }

    public static function css(string $route)
    {
        $route = CssFile::validate($route);

        echo self::path(self::CSS_FOLDER, $route);
    }


    public static function js(string $route)
    {
        $route = JsFile::validate($route);

        echo self::path(self::JS_FOLDER, $route);
    }


    private static function path(string $folder, string $route): string
    {
        return $_ENV['APP_URL'] . 'assets/' . $folder . "/{$route}";
    }


}