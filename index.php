<?php

use App\Core\Request;
use App\Core\Router;
use App\Utilities\Url;


include_once "bootstrap/init.php";


$router  = new Router();
$request = new Request();
$router->run();

//You can use static routes in here
/*if (Url::current_url() != '/'){
    include BASE_URL . 'views' . Url::current_url() . '.php';
}*/

