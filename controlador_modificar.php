<?php
include "conexiondb.php";
if(!empty("btnmodificar")){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["correo"])){
        $ID=$_POST["id2"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fechaNacimiento"];
        $correo=$_POST["correo"];
        $sql=$conexion->query("UPDATE clientes SET nombre='$nombre' , apellido='$apellido' , dni='$dni' , fecha_nac='$fecha', correo='$correo' WHERE ID='$ID'");
        header("location:index.php");
    }else{
        echo "datos incompletos";
    }
}



?>