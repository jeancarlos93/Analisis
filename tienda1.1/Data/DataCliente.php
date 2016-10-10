<?php

include_once '../Data/Data.php';
include_once '../Domain/Cliente.php';


if (isset($_REQUEST['opcion'])) {
$name = $_REQUEST['opcion'];

if ($name==0){
        consultarCliente();
    }
} else {
$name = "";
}

    function getCliente() {

    $mysqli = getConnection();
    $sql = "select * from cliente where estado = 1;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
          $cliente = new Cliente();
          $cliente->setCodigo($row['codigo']);
          $cliente->setNombre($row['nombre']);
          $cliente->setApellido($row['apellido']);
          $cliente->setCedula($row['cedula']);
          $cliente->setTelefono($row['telefono']);
            array_push($vector, $cliente);
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;
    
    }

function registrarCliente($cliente) {
    $conn = getConnection();
    //$codigo= 15;  //solo si no es autoincrement se usa 
    //$codigo = $cliente->getCodigo();
    $nombre = $cliente->getNombre();
     $apellido= $cliente->getApellido();
    $cedula=$cliente->getCedula();
    $telefono=$cliente->getTelefono();
    $sql = "insert into cliente (nombre,apellido,cedula,telefono) VALUES('".$nombre."','".$apellido."','".$cedula."','".$telefono."');";
    if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Cliente.php");
//    devolver a indice
    die();
    
}
///**********************----------//////////////
/*function cosultarCliente() {
$q = $_GET["nombre"];
    $mysqli = getConnection();
    $sql = "SELECT * FROM cliente WHERE (nombre LIKE '%$q%' OR apellido LIKE '%$q%') and estado = 1;";
    $resultado = $mysqli->query($sql);
 $vector = [];
 if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $cliente = new Cliente();
            $cliente->setCodigo($row['codigo']); 
            $cliente->setNombre($row['nombre']);
            $cliente->setApellido($row['apellido']);
            $cliente->setCedula($row['cedula']);
            $cliente->setTelefono($row['telefono']);
            $vector = $cliente;
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;

}*/
//modifcar Cliente
function getObtenerCliente($codigoCliente) {
    
  //  echo $codigoProveedor;
    $mysqli = getConnection();
    $sql = "select * from cliente where codigo=$codigoCliente;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $cliente = new Cliente();
            $cliente->setCodigo($row['codigo']); 
            $cliente->setNombre($row['nombre']);
            $cliente->setApellido($row['apellido']);
            $cliente->setCedula($row['cedula']);
            $cliente->setTelefono($row['telefono']);
            $vector = $cliente;
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function modificarCliente($cliente) {
    $conn = getConnection();
    $codigo= $cliente->getCodigo(); 
    $nombre = $cliente->getNombre();
    $apellido=$cliente->getApellido();
    $cedula=$cliente->getCedula();
    $telefono =$cliente->getTelefono();
    echo $codigo;
    $sql = "Update cliente set nombre='$nombre', apellido='$apellido', cedula='$cedula', telefono='$telefono' where codigo='$codigo'";
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Cliente.php");
//    devolver a indice
    die();    
}
function eliminarCliente($codigo) {// metodo de eliminar: aun no estaba vel valor a setear en labase de datos pero lo puse a setear el nombre... Cambiar la variable nada más
    $conn = getConnection();
    $sql = "Update cliente set estado = 0 where codigo='$codigo'";
     if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header("Location: ../view/Listado_Proveedores.php");
    die();
}


function consultarCliente() {
$q = $_GET["palabraClave"];
    $mysqli = getConnection();
    $sql = "SELECT * FROM cliente WHERE (nombre LIKE '%$q%' OR apellido LIKE '%$q%') and estado = 1;";
    $resultado = $mysqli->query($sql);         
echo "<table  border='0px' style='border:0px'>
<tr>
<br><br><br>
<th>Codigo</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Teléfono</th>
<th>Cédula</th>
<th>Modificar</th>
<th>Eliminar</th>

</tr>";
 
while($row = mysqli_fetch_array( $resultado)) {
    echo "<tr>";
    echo "<td>" . $row['codigo'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['apellido'] . "</td>";
    echo "<td>" . $row['telefono'] . "</td>";
    echo "<td>" . $row['cedula'] . "</td>";
    
    $cliente = new Cliente();
     $cliente->setCodigo($row['codigo']);
     $cliente->setNombre($row['nombre']);
     $cliente->setApellido($row['apellido']);
     $cliente->setCedula($row['cedula']);
     $cliente->setTelefono($row['telefono']);
    echo "<td>".'<a href= "../View/ModificarCliente.php?codigoCliente='.$row['codigo'].'">Modificar</a>'. "</td>";
    echo "<td>" .'<a href= "../Business/EliminarCliente.php?codigoCliente='.$row['codigo'].'">Eliminar</a>'. "</td>";
    
    echo "</tr>";
}
echo "</table>";
}