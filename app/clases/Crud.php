<?php

require_once "./clases/Conexion.php";
class Crud extends Conexion
{
    public function __construct() {
        parent::__construct();
    }
    public function mostrarDatos() {
        try {
            $db = parent::conectar();
            $collection = $db->personas;
            $personas = $collection->find();
            return $personas;
        } catch (Exception $e) {
            die('Error al realizar la conexión a MongoDB: '.$e->getMessage());
        }
    }

}