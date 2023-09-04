<?php

namespace Core;

class Router
{
    private $routes = [];

    public function __construct()
    {
        // Configurar rutas
        $this->routes = [
            '/home' => 'HomeController@index',
            '/users' => 'UserController@index',
            '/users/create' => 'UserController@create',
        ];
    }

    public function route($url)
    {
        // Eliminar la parte de la URL después del signo de interrogación (?)
        $url = $this->removeQueryString($url);

        // Verificar si la ruta está configurada
        if (array_key_exists($url, $this->routes)) {
            // Obtener el controlador y la acción
            $route = $this->routes[$url];
            $parts = explode('@', $route);
            $controllerName = $parts[0];
            $actionName = $parts[1];

            // Crear una instancia del controlador y ejecutar la acción
            $controllerClass = "App\Controllers\\$controllerName";
            $controller = new $controllerClass();
            $controller->$actionName();
        } else {
            http_response_code(404); // Establecer el código de respuesta HTTP 404
            include_once 'app/Views/404.php'; // Mostrar la página 404
        }
    }

    private function removeQueryString($url)
    {
        if (($pos = strpos($url, '?')) !== false) {
            $url = substr($url, 0, $pos);
        }
        return $url;
    }
}
