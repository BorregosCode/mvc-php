<?php
/**
 * Modelo de Libros
 */
class Libros 
{
    private $db;
    private $libros;

    function __construct()
    {
        $this->db = db::conexion();
        $this->libros = array();
    }

    public function getLibros()
    {
        $consulta = $this->db->query("SELECT * FROM libros");
        //Creamos un arreglo de arreglos asociativos
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)){
            $this->libros[] = $filas;
        }

        return $this->libros;
    }
}