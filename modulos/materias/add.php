<?php
    session_start();
    include_once("../../config/DBConect.php");
    include_once("../../config/Config.php");    

    if(isset($_POST['nombre']))      $nombre = $_POST['nombre']; 
    if(isset($_POST['periodo']))     $periodo = $_POST['periodo'];
    if(isset($_POST['docente']))     $docente = $_POST['docente'];
    if(isset($_POST['email']))       $email = $_POST['email'];

    $conexion = new Database;  
    $result = $conexion->CrearMateria($nombre,$periodo,$docente,$email);

    header("Location: ".ROOT."modulos/materias/materias.php?mensaje=".$result);

?>