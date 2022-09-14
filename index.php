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
<body>
    
    <h1 class="text-center p-3 bg-success"> Crud con bootstrap </h1>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h2 class="text-center text-secondary">Registro de personas</h2>

            <?php 
                include "conexiondb.php";
                include "insertar.php";
            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dni</label>
                <input type="text" class="form-control" name="dni" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fechaNacimiento">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                <input type="email" class="form-control" name="correo">
            </div>


            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registar</button>

        </form>

        <div class="col-8 p-3">
            <table class="table table-striped table-hover">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Fecha de Nac</th>
                    <th scope="col">Correo</th>
                    <th scope="col"></th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "conexiondb.php";
                        $sql=$conexion->query("select * from clientes");
                        while($datos=$sql->fetch_object()){?>

                            <tr>
                                <td><?= $datos->ID ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->dni ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->correo ?></td>
                                <td>
                                    <a href="modificar.php?id=<?=$datos->ID?>" class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="eliminar.php?id=<?=$datos->ID?>" class="btn btn-small btn-danger" name="btn-eliminar"> <i class="bi bi-trash3" ></i></a> 
                                </td>
                            </tr>
                        <?php
                        }
                    ?>




                    
                    
                </tbody>

            </table>

        </div>


    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>