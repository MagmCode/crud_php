<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP MVC</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4230aeea9b.js" crossorigin="anonymous"></script>

    <style>
        th {
            background: transparent;
        }
    </style>
</head>
<body>
	<h1 class="text-center p-3">Hola Mundo</h1>  
    
    <div class="container-fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary">Registro de Persona</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Apellido </label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Cedula </label>
                <input type="text" class="form-control" name="cedula">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Fecha de Nacimiento</label>
                <input type="text" class="form-control" name="f_nac">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Correo </label>
                <input type="email" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar">Registrar</button>

        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info-subtle">
                    <tr>
                        <th class="bg-transparent" scope="col">ID</th>
                        <th class="bg-transparent" scope="col">NOMBRE</th>
                        <th class="bg-transparent" scope="col">APELLIDO</th>
                        <th class="bg-transparent" scope="col">CEDULA</th>
                        <th class="bg-transparent" scope="col">F_NACIMIENTO</th>
                        <th class="bg-transparent" scope="col">CORREO</th>
                        <th class="bg-transparent" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from persona");
                        while($datos=$sql->fetch_object()){?>
                            
                            <tr>
                                <td><?= $datos->id_persona; ?></td>
                                <td><?= $datos->nombre; ?></td>
                                <td><?= $datos->apellido; ?></td>
                                <td><?= $datos->cedula; ?></td>
                                <td><?= $datos->f_nac; ?></td>
                                <td><?= $datos->correo; ?></td>   
                                <td>

                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #ffff;"></i></a>
                            <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can" style="color: #ffff;"></i></a>
                        </td>   
                    </tr>
                    <?php    
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>


<!-- Javascript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
