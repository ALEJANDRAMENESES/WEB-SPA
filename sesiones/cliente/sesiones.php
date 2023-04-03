<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Sesiones</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="../index.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-light" href="add.php">Registrar sesión</a>
                    <a class="nav-link text-light" aria-current="page" href="sesiones.php">Ver sesiones</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3 mb-3">
        <?php
     include("../config/config.php");

     $registros = getUsers(); 
    
    if(mysqli_num_rows($registros) > 0) { 
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Duración de Sesión</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
      // Loop a través de los resultados y crear una fila para cada registro
      while($row = mysqli_fetch_assoc($registros)) {
    ?>
                <tr>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['apellidos']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['celular']; ?></td>
                    <td><?php echo $row['duracionSesion']; ?></td>
                    <td><?php echo $row['fecha']; ?></td>
                    <td>
                        <!-- Botón de actualización -->
                        <a href="actualizar.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Actualizar</a>

                        <!-- Botón de eliminación -->
                        <a href="eliminar.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-warning text-center" role="alert">
            No se encontraron registros
        </div>
        <?php } ?>
    </div>
</body>

</html>