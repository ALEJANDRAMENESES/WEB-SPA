<?php 

include_once('../config/config.php');
include('../config/Database.php');
class usuario{

    public $conexion;

    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
    
        $insert = "INSERT INTO usuarios (nombres, apellidos, email, celular) VALUES ('$nombres', '$apellidos', '$email', '$celular')";
        return mysqli_query($this->conexion, $insert);
    }
    
    function getALL(){
        $sql = "SELECT * FROM usuarios";
        return mysqli_query($this->conexion, $sql);
    }
    
    function getOne($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $email = $params['email'];
        $celular = $params['celular'];
        $id = $params['id'];
    
        $update = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', email='$email',celular='$celular' WHERE id = $id";
        return mysqli_query($this->conexion, $update);
    }
 
    function delete($id){
        $delete =" DELETE FROM usuarios WHERE id = $id ";
        return mysqli_query($this->conexion, $delete);
    }

}
?>