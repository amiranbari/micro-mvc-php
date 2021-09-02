<?php

namespace App\Core;

use App\Utilities\Url;

class Router
{
    const PATHS = [
        '/login'       =>  'login.php',
        '/register'    =>  'register.php'
    ];

    const NOT_FOUND = 'errors/404.php';

    public function run()
    {
        $route = Url::current_url();

        (!isset(self::PATHS[$route])) && $this->notFound(BASE_URL . 'views/' . self::NOT_FOUND);

        $this->view(BASE_URL . 'views/' . self::PATHS[$route]);

    }

    private function notFound(string $view)
    {
        header("HTTP/1.0 404 Not Found");
        $this->view($view);
    }

    /**
     * @param string $path
     */
    protected function view(string $path)
    {
        return die(include($path));
    }
}