<?php
include('../config/config.php');
include('usuario.php');

$p = new usuario();
$result = $p->getOne($_GET['id']);
$dp = mysqli_fetch_assoc($result);

if (isset($_POST) && !empty($_POST)) {
    $dp['nombres'] = $_POST['nombres'];
    $dp['apellidos'] = $_POST['apellidos'];
    $dp['email'] = $_POST['email'];
    $dp['celular'] = $_POST['celular'];

    $update = $p->update($dp);

    if ($update) {
        $mensaje = '<div class="alert alert-success" role="alert" > Sesión modificada con éxito. </div>';
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert" > Error! </div>';
    }
}
?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <title> Modificar sesión </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>
   <div class="container">
    <?php 
    if(isset($mensaje)){
        echo $mensaje;
    }
    ?>
    <h2 class="text-center mb-2"> Modificar sesión </h2>
    <form method="POST" enctype="multipart/form-data" >
    <div class="row mb-2">
        <div class="col">
            <input type="text" name="nombres" id="nombres" placeholder="Nombres del usuario" class="form-control" value="<?= $dp["nombres"]; ?>"  />
            <input type="hidden" name="id" value="<?= $dp["id"]; ?>" />
        </div>
        <div class="col">
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="form-control" value="<?= $dp["apellidos"]; ?>" />
        </div>
    </div>
    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Email del usuario" class="form-control" value="<?= $dp["email"]; ?>" />
        </div>
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Celular del usuario" class="form-control" value="<?= $dp["celular"]; ?>"/>
        </div>
    </div>
    <button class="btn btn-success"> Modificar </button>
    </form> 
   </div> 
</body>
</html>