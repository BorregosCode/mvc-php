<?php
//Reqierir modelo
require_once 'model/LibrosModel.php';
//Crear instancia
$libros = new Libros();
$datos = $libros->getLibros();

// llamamos a la vista
require_once 'views/LibrosView.php';