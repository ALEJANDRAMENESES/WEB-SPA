<?php

include("functions.php");

if (defined("ROOT")){
    echo "El texto a mostrar" . defined("ROOT");
    define("ROOT","http://".$_SERVER("HTTP_HOST").getFolderProyect());
}

?>