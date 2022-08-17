<?php
session_start();
if(isset($_POST['accion'])){
$accion=$_POST['accion'];
if($accion=="guardar"){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $city=$_POST['city'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $documento=$_POST['documento'];
    $comentario=$_POST['comentario'];

    require 'conexion.php';
    $res=$con->query("SELECT * FROM `registro` where documento=$documento");
    if($res->num_rows>0){
        $_SESSION['mensaje'] = '<div class="alert alert-danger" role="alert">
       Ya existe un usuario con ese documento
      </div>';
    }else{


    $res=$con->query("INSERT INTO `registro`(`fristname`, `lastname`, `city`, `celular`, `email`, `documento`, `comentario`) VALUES ('$firstname','$lastname','$city','$celular','$email','$documento','$comentario')");
    $_SESSION['mensaje'] = '<div class="alert alert-success d-flex align-items-center" role="alert">
    <div>
      Usuario registrado con exito
    </div>
  </div>';


}
header("location:contactanos.php");
}else if($accion=="consultar"){
    
    $documento=$_POST['documento'];

    require 'conexion.php';
    $res=$con->query("SELECT * FROM `registro` where documento=$documento");
    if($res->num_rows>0){
        $_SESSION['datos'] =$res->fetch_object();
        $_SESSION['mensaje'] = '<div class="alert alert-success" role="alert">
       Usuario encontrado
      </div>';
    }else{

    $_SESSION['mensaje'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
    <div>
      Usuario no registrado
  </div>';


}
header("location:crud.php");
}else if($accion=="actualizar"){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $city=$_POST['city'];
    $celular=$_POST['celular'];
    $email=$_POST['email'];
    $documento=$_POST['documento'];
    $comentario=$_POST['comentario'];

    require 'conexion.php';
    $res=$con->query("SELECT * FROM `registro` where documento=$documento");
    if($res->num_rows>0){
        $res=$con->query("UPDATE `registro` SET `fristname`='$firstname',`lastname`='$lastname',`city`='$city',`celular`='$celular',`email`='$email',`documento`='$documento',`comentario`='$comentario' WHERE documento=$documento");
        $_SESSION['mensaje'] = '<div class="alert alert-success" role="alert">
       Usuario actualizado
      </div>';
    }else{

    $_SESSION['mensaje'] = '<div class="alert alert-warning d-flex align-items-center" role="alert">
    <div>
      Usuario no registrado
  </div>';


}
header("location:crud.php");
}
}else{
    echo "no se ha hecho click";
}