<?php

namespace App\Models;

class ExampleModel extends BaseModel
{
    public function getAll()
    {
        // Ejemplo de consulta a la base de datos
        $query = "SELECT * FROM example_table";
        $result = $this->db->query($query);
        
        // Procesar los resultados y devolverlos
        // ...
    }
}
