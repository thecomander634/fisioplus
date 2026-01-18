<?php

class PersistentManager {

    // Instancia privada de conexión.
    private static $instance = null;
    //Conexión a BD
    private static $connection = null;

    //Get de la conexión
    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    //Constructor de la clase privado
    private function __construct() {
        
        // --- CONFIGURACIÓN PARA DOCKER (Puesta manual para evitar errores) ---
        $host = "db";                 // Nombre del servicio en docker-compose
        $user = "usuario_rpg";        // Usuario definido en docker-compose
        $pass = "1234";               // Contraseña definida en docker-compose
        $db   = "roleplayinggamedb";  // Nombre de la base de datos

        // Intentamos conectar
        PersistentManager::$connection = mysqli_connect($host, $user, $pass, $db);

        // Si falla, mostramos el error exacto
        if (mysqli_connect_errno()) {
            die("Could not connect to db: " . mysqli_connect_error());
        }

        mysqli_query(PersistentManager::$connection, "SET NAMES 'utf8'");
    }
    
    // (La función establishCredentials ya no la necesitamos, la ignoramos)
    private function establishCredentials() { }
    
    //Cierra la conexión.
    public function close_connection() {
        if (PersistentManager::$connection) {
            mysqli_close(PersistentManager::$connection);
        }
    }

    //Retorna la instancia de la conexión
    function get_connection() {
        return PersistentManager::$connection;
    }
}
?>