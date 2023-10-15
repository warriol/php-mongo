<?php
// Enabling Composer Packages
require_once './vendor/autoload.php';
class Conexion {

    private $db_username;
    private $db_password;
    private $db_host;
    private $bd         = "tnosql";
    private $puerto     = "27017";
    public function __construct() {
        // Get environment variables
        $local_conf = getenv();

        $this->db_username = $local_conf['DB_USERNAME'];
        $this->db_password = $local_conf['DB_PASSWORD'];
        $this->db_host = $local_conf['DB_HOST'];

    }

    public function conectar() {

        try {
            $cliente = new \MongoDB\Client('mongodb://'.
                $this->db_username .':' .
                $this->db_password . '@'.
                $this->db_host . ':' .
                $this->puerto. '/' .
                $this->bd);
            echo "Conectado a MongoDB satisfactoriamente";
        } catch (Exception $e) {
            die('Error al realizar la conexión a MongoDB: '.$e->getMessage());
        }

        return $cliente->selectDatabase($bd);
    }
}