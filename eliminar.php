<?php
    //borra la base de datos, abre la base de datos desde este modulo
    include "conexiondb.php";
    if(!empty($_GET["id"])){ 
        echo "acatoy";
        $ID=$_GET["id"];
        $sql=$conexion->query("DELETE FROM clientes WHERE ID=$ID");
        header("location:index.php");
    }else{
        echo "noestoy"; 
    }

?>