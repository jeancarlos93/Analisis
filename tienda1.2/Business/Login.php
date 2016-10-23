<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../Data/DataLogin.php';
//include_once '../Domain/sesion.class.php';


$usuario = trim($_POST['nombreUsuario']);  //asocia los name de los campos de las interfaces
$password = $_POST['contrasenia1Usuario'];

/*if(validarUsuarios($usuario,$password) == true){
      $sesion = new sesion();
      $sesion->set("usuario",$usuario);
      header("location: ../View/Header.php");
   } else {
     echo "Verifica tu nombre de usuario y contraseña";
   }*/

validarUsuarios($usuario, $password);
        
?>

