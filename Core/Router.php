<?php

namespace Core;

class Router
{
    public function dispatch(string $url): void
    {
        $url = parse_url($url, PHP_URL_PATH);
        $url = trim($url, "/");

        $urlParts = explode("/", $url);

        $className = $urlParts[0];
        $methodName = $urlParts[1] ?? 'index';

        $className = ucfirst($className);
        $className = "App\\Controllers\\{$className}Controller";

        $controller = new $className();
        $controller->$methodName();
    }
}
