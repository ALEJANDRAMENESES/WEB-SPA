<?php
    include("../config/config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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
                    <a class="nav-link text-light" href="#">Registrar sesión</a>
                    <a class="nav-link text-light" aria-current="page" href="sesiones.php">Ver sesiones</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container card mt-3 p-4 mb-3">
        <div class="text-left m-3">
            <h3>Registrar sesión</h3>
        </div>

        <form class="text-center" method="post" action="submit.php">

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputNombres">Nombres</span>
                <input type="text" class="form-control inputNombres" id="inputNombres" name="inputNombres" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputApellidos">Apellidos</span>
                <input type="text" class="form-control inputApellidos" id="inputApellidos" name="inputApellidos"
                    required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputEmail">Email</span>
                <input type="email" class="form-control inputEmail" id="inputEmail" name="inputEmail" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputCelular">Celular</span>
                <input type="number" class="form-control inputCelular" id="inputCelular" name="inputCelular" required>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>