<?php

namespace Src\Http;

class Route

{
    protected Request $request;
    protected Response $response;

    public function __construct(Request $request, Response $response)
    {

        $this->request  = $request;
        $this->response = $response;
    }

    public static array $routes = [];

    // Route::get($);

    public static function get($routes, callable|array|string $action)
    {

        self::$routes['get'][$routes] = $action;
    }

    public static function post($routes, callable|array|string $action)
    {

        self::$routes['post'][$routes] = $action;
    }


    public function resolve()
    {
        $path = $this->request->path();

        $method = $this->request->method();

        $action = self::$routes[$method][$path] ?? false;

        if (!$action) {

            return;
        }

        if (is_callable($action)) {

            call_user_func_array($action, []);
        }

        if (is_array($action)) {
        }
    }
}
