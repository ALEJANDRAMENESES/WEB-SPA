<?php

require('database.php');

function getFolderProyect(){
  if (strpos(__DIR__, "/") !== false){
    $sfolder = str_replace("C:\xampp\htdocs", "/", __DIR__);

  }else{
    $sfolder = str_replace("index.php","", $sfolder);
  }

  return $sfolder;
}


function registerUser(){
  $nombres = $_POST["inputNombres"];
  $apellidos = $_POST["inputApellidos"];
  $email = $_POST["inputEmail"];
  $celular = $_POST["inputCelular"];
  $duracionSesion = 0;
  $fecha = date('Y-m-d H:i:s');
  
  $sql = "INSERT INTO clientes (nombres, apellidos, email, celular, duracionSesion, fecha) 
        VALUES ('" . $nombres . "', '" . $apellidos . "', '" . $email . "', '" . $celular . "', '" . $duracionSesion . "', '" . $fecha . "')";

  $db = new Database();
  $conexion = $db->connectToDatabase();

  if(mysqli_query($conexion, $sql)) {
    echo "Nuevo registro creado...";
  }else{
    echo "Algo salio mal...";
  }

  $conexion->close();
}


function getUsers(){
  $db = new Database();
  $conexion = $db->connectToDatabase();

  $sql = "SELECT * FROM clientes";
  $registros = mysqli_query($conexion, $sql);

  $conexion->close();

  return $registros;
}


function deleteUser($id){
  $db = new Database();
  $conexion = $db->connectToDatabase();

  $sql = "DELETE FROM clientes WHERE id = " . $id;

  mysqli_query($conexion, $sql);

  $conexion->close();
}


function updateUser($id, $datos){
  $db = new Database();
  $conexion = $db->connectToDatabase();

  $sql = "UPDATE clientes SET ";
  $sql .= "nombres = '" . $datos['nombres'] . "', ";
  $sql .= "apellidos = '" . $datos['apellidos'] . "', ";
  $sql .= "email = '" . $datos['email'] . "', ";
  $sql .= "celular = '" . $datos['celular'] . "', ";
  $sql .= "duracionSesion = '" . $datos['duracionSesion'] . "', ";
  $sql .= "fecha = '" . $datos['fecha'] . "' ";
  $sql .= "WHERE id = " . $id;

  mysqli_query($conexion, $sql);

  $conexion->close();
}


function getClientId($id) {
  $db = new Database();
  $conexion = $db->connectToDatabase();

  $sql = "SELECT * FROM clientes WHERE id = " . $id;

  $registro = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($registro) == 0) {
      return null;
  }

  $cliente = mysqli_fetch_assoc($registro);

  mysqli_close($conexion);

  return $cliente;
}


?>
