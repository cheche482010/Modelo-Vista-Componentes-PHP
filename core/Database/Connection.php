<?php

namespace Core\Database;

class Connection
{
    private static $instance;

    private function __construct()
    {
        // Configurar y establecer la conexión a la base de datos
        // ...
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Otros métodos para realizar consultas, transacciones, etc.
}
