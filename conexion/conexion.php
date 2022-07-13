<?php
$localh="localhost";
$user="root";
$pass="";
$db="formulario";
$Conexion=new mysqli($localh,$user,$pass,$db); 
if ($Conexion->connect_errno) {
    echo "Problemas en la Conexion a MySQL: " . $Conexion->connect_error;
}