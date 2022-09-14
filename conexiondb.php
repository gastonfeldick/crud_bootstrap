<?php
$server="localhost";
$user="gaston";
$password="2304";
$db="crud";

$conexion= new mysqli($server,$user,$password,$db);
$conexion->set_charset("utf8");

if(!$conexion){
    #echo("erro");
}else{
    #echo("conectado");
}

?>