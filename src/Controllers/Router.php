<?php

class Router {
    private array $routes = [];

    public function get(string $path, array $callback) {
        $this->routes['GET'][$path] = $callback;
    }

    public function dispatch(string $uri) {
        $uri = parse_url($uri, PHP_URL_PATH);

        if (isset($this->routes['GET'][$uri])) {
            [$controller, $method] = $this->routes['GET'][$uri];
            $controllerInstance = new $controller();
            call_user_func([$controllerInstance, $method]);
        } else {
            http_response_code(404);
            echo "404 - Page not found";
        }
    }
}
