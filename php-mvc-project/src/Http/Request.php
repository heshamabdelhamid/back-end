<?php

namespace Src\Http;

class Request
{
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function path()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH,);
        return trim($path, '/');
    }
}