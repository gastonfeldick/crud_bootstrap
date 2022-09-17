<?php
//inserta los datos a la data base la db ya la incluye en el index
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fechaNacimiento"]) and !empty($_POST["correo"])){
        
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $dni=$_POST["dni"];
        $fecha=$_POST["fechaNacimiento"];
        $correo=$_POST["correo"];
        $sql=$conexion->query("insert into clientes(nombre,apellido,dni,fecha_nac,correo)values('$nombre','$apellido','$dni','$fecha','$correo')");
        if($sql==1){
            echo '<div class="alert alert-success">Insertado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">error no insertado</div>';
        }
    }else{
        echo '<div class="alert alert-danger">Campos incompletos</div>';
    }

}


?>