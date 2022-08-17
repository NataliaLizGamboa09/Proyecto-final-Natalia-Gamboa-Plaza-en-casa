<?php
session_start();
if(isset($_GET['documento'])){       
        $doc=$_GET['documento'];
        require 'conexion.php';
        
        $res=$con->query("SELECT * FROM `registro` WHERE documento='$doc'");
        if($res->num_rows==0){
            $_SESSION['mensaje'] = '<div class="alert alert-danger" role="alert">
            No existe un usuario con ese documento
            </div>';
        }else{
            $res=$con->query("DELETE FROM `registro` WHERE documento='$doc'");
            $_SESSION['mensaje'] = '<div class="alert alert-success" role="alert">
            Eliminado con exito
            </div>';
        }
header("location:crud.php");
}
?>