<?php

namespace framework;

use http\Exception\RuntimeException;

class Route
{
    protected $routes=[];

    public function register($route)
    {
        $this->routes[]= $route;
    }

    public function define($routes)
    {
        $this->routes=$routes;
        return $this;
    }
}
