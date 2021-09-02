<?php

use Symfony\Component\Dotenv\Dotenv;

define('BASE_URL', __DIR__ . '/../');

include_once (BASE_URL . "/vendor/autoload.php");

$dotenv = new Dotenv();
$dotenv->load(BASE_URL . '/.env');