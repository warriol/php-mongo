<?php

    require_once "./clases/Crud.php";

    $crud = new Crud();
    $personas = $crud->mostrarDatos();

    foreach ($personas as $persona) {
        echo $persona['nombre'] . '<br>';
    }
