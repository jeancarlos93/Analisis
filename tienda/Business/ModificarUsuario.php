<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Data/DataUsuario.php';
include_once '../Domain/Usuario.php';


if($_POST['contrasenia1Usuario'] == $_POST['contrasenia2Usuario'] ){
        
        $nombre = trim($_POST['nombreUsuario']);  //asocia los name de los campos de las interfaces
        $apellido = $_POST['apellidoUsuario'];
        $telefono = $_POST['telefonoUsuario'];
        $cedula = $_POST['cedulaUsuario'];
        $tipoEmpleado = $_POST['tipoEmpleado'];
        $contrasenia = $_POST['contrasenia1Usuario'];
    
        $usuario = new Usuario();
        $usuario->setNombre($nombre);
        $usuario->setApellido($apellido);
        $usuario->setTelefono($telefono);
        $usuario->setCedula($cedula);
        $usuario->setContrasenia($contrasenia);
        $usuario->setTipoEmpleado($tipoEmpleado);
        modificarUsuario($usuario);
        
    }
    else {
        echo 'Verifica que las contraseñas coincidan';
    }

?>