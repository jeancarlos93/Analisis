<?php
include_once '../Data/Data.php';
function ModificarCategoria($codigo,$categoria) {// metodo de eliminar: aun no estaba vel valor a setear en labase de datos pero lo puse a setear el nombre... Cambiar la variable nada mÃƒÂ¡s
    $conn = getConnection();
    $sql = "Update categoriaProd set categoria='$categoria' where id='$codigo'"; //Update Proveedor set estado=0 where codigo =6;
   
    if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  
    $conn->close();
    header("Location: ../view/Registrar_Categoria.php");
    
    die();
    
    
}

function registrarCategoria($categoria) {
    $conn = getConnection();
    $categoriaN= $categoria->getCategoria();  //solo si no es autoincrement se usa

    $sql = "insert into categoriaProd (categoria) VALUES('$categoriaN');";

    if ($conn->query($sql) == TRUE) {

        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: ../View/Registrar_Categoria.php");
    die();
}

