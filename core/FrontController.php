<?php

namespace Core;

class FrontController
{
    public function __construct()
    {
        // Configurar el enrutador
        $router = new Router();
        $router->route($_SERVER['REQUEST_URI']);
    }
}
