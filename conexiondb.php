<?php
$server="localhost";
$user="root";
$password="";
$db="crud";

$conexion= new mysqli($server,$user,$password,$db);
$conexion->set_charset("utf8");

if(!$conexion){
    #echo("erro");
}else{
    #echo("conectado");
}

?>