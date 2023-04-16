<?php 
include_once('../config/config.php');
include('usuario.php');

if ( isset($_POST) && !empty($_POST) ){
    $p = new Usuario();
$save = $p->save($_POST);
if ($save){
    $mensaje = '<div class="alert alert-success" > Sesión registrada </div>';
}else{
    $mensaje ='<div class="alert alert-danger"> Error al registrar! </div>';
}
}

?>
<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <title> Registrar sesión </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/iniciostyles.css">
    <link rel="stylesheet" href="../css/paginastyles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: white;">
            <div class="container" style="justify-content:space-between !important;">
                <a href="../index.html"><img src="../imagenes/logo.jpg"class=".img-logo" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#planes">PLANES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pagina.html">MASAJES DE RELAJACIÓN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../pagina.html">SPA MOVIL</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="add.php">CONTACTENOS</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
   <div class="container">
    <?php 
    if(isset($mensaje)){
        echo $mensaje;
    }
    ?>
    <hr>
    <br>
    <br>
    <br>
    <h2 class="text-center mb-2"> Registrar sesión </h2>
    <form method="POST" enctype="multipart/form-data" >
    
    
    <div class="row mb-2">
        <div class="col">
            <input type="text" name="nombres" id="nombres" placeholder="Nombres del usuario" class="form-control" />
        </div>
        <div class="col">
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos del usuario" class="form-control" />
        </div>
    </div>

    <div class="row mb-2">
        <div class="col">
            <input type="email" name="email" id="email" placeholder="Email del usuario" class="form-control" />
        </div>
        <div class="col">
            <input type="number" name="celular" id="celular" placeholder="Celular del usuario" class="form-control" />
        </div>
    </div>
    
    <button class="btn btn-success"> Registrar </button>

<section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<hr>
    <footer>
        <hr>
            <div class="container">
              <div class="row">
                  <div class="col-xs-12 col-md-6">
                      <h6 class="text-muted lead">CONTACTO:</h6>
                      <h6 class="text-muted">
                      Calle 6a No. 89-47 Local 2<br>
                      Tintala<br>
                      Teléfonos: 3125506536 – 3103287876.<br>
                      </h6>
                  </div>
                  <div class="col-xs-12 col-md-6">
                  <div class="pull-right">
                  <h6 class="text-muted lead">ENCUENTRANOS EN LAS REDES</h6>
                        <div class="redes-footer">
                            <a href="https://www.facebook.com/"><img src="../imagenes/face.png "width="50" height="50"></a>
                            <a href="https://www.instagram.com/"><img src="../imagenes/INSTAGRAM.png"width="50" height="50"></a>
                            <a href="https://www.youtube.com/"><img src="../imagenes/youtube.png"width="50" height="50"></a>
                        </div>
                  </div>
                  <div class="row"> <p class="text-muted small text-right"> Alejandra Meneses,belleza @2023.<br> Todos los derechos reservados.</p></div>
              </div>
            </div>  
          </div>
          </footer>
    </footer>
    
    </footer>
    </div>
    </div>

    </section>


    </div>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>  
 
    </form> 
   </div> 
</body>
</html>