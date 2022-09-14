<?php
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