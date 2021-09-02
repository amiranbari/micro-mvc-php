<?php

namespace App\Core;

class Request
{
    private $parameters;
    private $agent;
    private $method;
    private $ip;

    public function __construct()
    {
        $this->parameters = $_REQUEST;
        $this->agent      = $_SERVER['HTTP_USER_AGENT'];
        $this->method     = $_SERVER['REQUEST_METHOD'];
        $this->ip         = $_SERVER['REMOTE_ADDR'];
    }

    public function __get($name)
    {
        return $this->input($name);
    }

    public function parameters()
    {
        return $this->parameters;
    }

    public function agent()
    {
        return $this->agent;
    }

    public function method()
    {
        return $this->method;
    }

    public function ip()
    {
        return $this->ip;
    }

    public function input($key)
    {
        return $this->parameters[$key] ?? null;
    }

    public function isset($key)
    {
        return isset($this->parameters[$key]);
    }
}