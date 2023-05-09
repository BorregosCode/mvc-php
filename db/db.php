<?php

class db
{
    public static function conexion()
    {
        $host = 'localhost'; // Cambia esto por la dirección de tu servidor PostgreSQL
        $dbname = 'mvc'; // Cambia esto por el nombre de tu base de datos
        $username = 'soporte'; // Cambia esto por el nombre de usuario de PostgreSQL
        $password = 'soporte'; // Cambia esto por la contraseña de PostgreSQL
        
        try {
            $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
            // Configura PDO para que lance excepciones en caso de errores
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }
}