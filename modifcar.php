<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from persona where id_persona=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4230aeea9b.js" crossorigin="anonymous"></script>
</head>
<body>

<form class="col-4 p-3 m-auto" method="POST">
            <h2 class="text-center text-secondary">Modificar Persona</h2>
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <?php
                include "controlador/modificar_persona.php";
                while($datos=$sql->fetch_object()){?>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Apellido </label>
                        <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" > Cedula </label>
                        <input type="text" class="form-control" readonly  name="cedula" value="<?= $datos->cedula; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Fecha de Nacimiento</label>
                        <input type="text" class="form-control" name="f_nac" value="<?= $datos->f_nac; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Correo </label>
                        <input type="email" class="form-control" name="correo" value="<?= $datos->correo; ?>">
                    </div>
        
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary" name="btnactualizar" value="ok">Actualizar</button>
                    </div>
        
            <?php    
                }
            ?>
                </form>

        <!-- Javascript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
