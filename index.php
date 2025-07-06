<?php

    require_once 'conf.php';

    $routes = require 'routes.php';
    $request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if (array_key_exists($request, $routes)) {
        
        require $routes[$request];
    } else {
        http_response_code(404);
        echo "Página no encontrada";
    }