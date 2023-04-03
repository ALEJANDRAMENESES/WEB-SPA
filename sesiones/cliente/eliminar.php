<?php
    require_once("../config/functions.php");
    
    $id = $_GET["id"];
    deleteUser($id);

    header("Location: sesiones.php");
?>