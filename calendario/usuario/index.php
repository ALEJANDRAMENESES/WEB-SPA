<?php 
include_once('../config/config.php');
include('usuario.php');

$p = new usuario();
$data = $p->getALL();

if (isset($_GET['id']) && !empty($_GET['id']) ){
   $remove = $p->delete($_GET['id']);
   if ($remove){
    header('Location: '.ROOT.'/usuario/index.php');
   }else{
   $mensaje = '<div class="alert alert-danger" role="alert" > Error al eliminar </div>';
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php include('../menu.php') ?>
    <div class="container">
        <h2 class="text-center mb-2" > clientes </h2>
        <div class="row">
            <?php
            while($pt = mysqli_fetch_object($data)){
                echo "<div class='col' >";
                echo"<div class='border border-info p-2'>";
                echo "<h5> $pt->nombres $pt->apellidos</h5>";
                echo "<h5> $pt->email </h5>";
                echo "<h5> $pt->celular  </h5>";
                echo"<div class='text-center'>";
                echo "<a class = 'btn btn-success' href='".ROOT."/usuario/edit.php?id=$pt->id' > Modificar </a> - <a class=' btn btn-danger' href='".ROOT."/usuario/index.php?id=$pt->id' > Eliminar </a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                
            } 
            ?>

        </div>
    

    </div>
    
</body>
</html>