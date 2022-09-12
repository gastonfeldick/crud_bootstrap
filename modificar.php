<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-success">


        
        <form class="col-4 p-3 m-auto" method="POST" action="controlador_modificar.php">
            <h2 class="text-center text-secondary">Modificar persona</h2>
            <input type="hidden" name="id2" value=<?= $_GET["id"]?>>
            <?php
                include "conexiondb.php";
                $ID=$_GET["id"];
                $sql=$conexion->query("select * from clientes where ID=$ID ");
                
                while($datos=$sql->fetch_object()){ ?>
                    

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value=<?= $datos->nombre ?>>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" value=<?= $datos->apellido?>>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" ?>>Dni</label>
                        <input type="text" class="form-control" name="dni" value=<?= $datos->dni?>>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" >Fecha de Nacimiento </label>
                        <input type="date" class="form-control" name="fechaNacimiento" value=<?= $datos->fecha_nac ?>>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" value=<?= $datos->correo ?>>Correo electronico</label>
                        <input type="email" class="form-control" name="correo" value=<?= $datos->correo ?>>
                    </div>
                <?php }
                

            ?>
            

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok" >Modificar</button>
            </div>
        </form>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>