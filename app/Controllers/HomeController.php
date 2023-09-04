<?php

namespace App\Controllers;

use App\Models\ExampleModel;

class HomeController
{
    public function index()
    {
        $model = new ExampleModel();
        $data = $model->getAll();

        // Cargar la vista con los datos
        // ...
    }
}
