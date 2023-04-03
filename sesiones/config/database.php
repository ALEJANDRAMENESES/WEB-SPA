<?php
    class Database{
        public $host = "localhost";// servidor
        public $user = "root"; // usruaio de phpmyadmin
        public $pass = ''; // contaseñoa de phpmyadmin
        public $db = "sesiones"; // base de datos
        public $conexion;

        function connectToDatabase(){
            $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            
            if (mysqli_connect_error()){
                echo "Error de conexion ". mysqli_connect_error();
            }

            return $this->conexion;
        }
    }
?>