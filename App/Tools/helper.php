<?php

function site_url($route) {
    return $_ENV['APP_URL'] . $route;
}

function asset_url($route) {
    return site_url("assets/{$route}");
}

/*function dd($data) {
    die(dump($data));
}*/
