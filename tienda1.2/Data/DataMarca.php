<?php
include_once '../Data/Data.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function eliminarMarca($idMarca,$marcas) {// metodo de modificar: aun no estaba vel valor a setear en la base de datos pero lo puse a setear el nombre... Cambiar la variable nada mÃƒÂ¡s
    
    $conn = getConnection();
    $sql = "Update marcaProd set marca='$marcas' where id=$idMarca";
     if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  
    $conn->close();
    header("Location: ../view/Registrar_marca.php");
    die();
}


function registrarMarca($marca) {
    $conn = getConnection();
    $marcaN= $marca->getMarca();  //solo si no es autoincrement se usa

    $sql = "insert into marcaProd (marca) VALUES('$marcaN');";

    if ($conn->query($sql) == TRUE) {

        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../View/Registrar_Marca.php");
    die();
}
