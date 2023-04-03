<?php
    require_once("../config/functions.php");

    $id = $_POST['id'];

    $datos = [
        "nombres" => $_POST['inputNombres'],
        "apellidos" => $_POST['inputApellidos'],
        "email" => $_POST['inputEmail'],
        "celular" => $_POST['inputCelular'],
        "duracionSesion" => $_POST['inputSesion'],
        "fecha" => $_POST['inputFecha']
    ];

    updateUser($id, $datos);

    header("Location: sesiones.php");
?>