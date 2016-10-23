  <?php

include_once '../Data/Data.php';
include_once '../Domain/Proveedor.php';

function getProveedores() {
    
    $mysqli = getConnection();
    $sql = "select * from proveedor where estado=1;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $proveedor = new Proveedor();
            $proveedor->setCodigo($row['codigo']); 
            $proveedor->setNombre($row['nombre']);
            $proveedor->setApellido($row['apellido']);
            $proveedor->setTelefono($row['telefono']);
            $proveedor->setCorreo($row['correo']);           
            $proveedor->setEmpresa($row['empresa']);
            array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function getObtenerProveedor($codigoProveedor) {

    $mysqli = getConnection();
    $sql = "select * from proveedor where codigo=$codigoProveedor;";
    $resultado = $mysqli->query($sql);
    $vector = [];
    
    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {  
            $proveedor = new Proveedor();
            $proveedor->setCodigo($row['codigo']); 
            $proveedor->setNombre($row['nombre']);
            $proveedor->setApellido($row['apellido']);
            $proveedor->setTelefono($row['telefono']);
            $proveedor->setCorreo($row['correo']);
            $proveedor->setEmpresa($row['empresa']);
            $vector = $proveedor;
          //  array_push($vector, $proveedor);
        }
    } else {
        echo "0 results";
    }
    
    $mysqli->close();     
    return $vector;
}

function registrarProveedor($proveedor) {
    $conn = getConnection();
    $codigo= $proveedor->getCodigo();  //solo si no es autoincrement se usa 
    $nombre = $proveedor->getNombre();
    $apellido=$proveedor->getApellido();
    $telefono = $proveedor->getTelefono();
    $correo=$proveedor->getCorreo();
    $empresa = $proveedor->getEmpresa();
    
    $sql = "insert into proveedor (nombre,apellido,telefono,correo,empresa) VALUES('".$nombre."','".$apellido."','".$telefono."','".$correo."','".$empresa."');";

    if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
     header("Location: ../View/Listado_Proveedores.php");
//    devolver a indice
    die();
      
}

function modificarProveedor($proveedor) {
    $conn = getConnection();
    $codigo= $proveedor->getCodigo(); 
    $nombre = $proveedor->getNombre();
    $apellido=$proveedor->getApellido();
    $telefono = $proveedor->getTelefono();
    $correo=$proveedor->getCorreo();
    $empresa = $proveedor->getEmpresa(); 
 
    $sql = "Update proveedor set nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', empresa='$empresa' where codigo='$codigo'";
    
     if ($conn->query($sql) == TRUE) {
//        $usuario->setCodigoUsuario($conn->insert_id);
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    header("Location: ../View/Listado_Proveedores.php");
//    devolver a indice
    die();
    
}

function eliminarProveedor($codigo) {// metodo de eliminar: aun no estaba vel valor a setear en labase de datos pero lo puse a setear el nombre... Cambiar la variable nada mÃ¡s
    $conn = getConnection();
    $sql = "Update proveedor set estado=0 where codigo='$codigo'"; //Update Proveedor set estado=0 where codigo =6;
     if ($conn->query($sql) == TRUE) {
        echo "GUARDADO ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }  
    $conn->close();
    header("Location: ../View/Listado_Proveedores.php");
    
    die();
    
}

function consultarProveedor($opcion, $campoBusquedad){
    
    $mysqli = getConnection();
    if($opcion==0){
        $sql = "select * from Proveedor where estado=1 and codigo='$campoBusquedad'";
    }else if($opcion==1){
        $sql = "select * from Proveedor where estado=1 and nombre='$campoBusquedad'";
    }else{
        
    }
    
    $resultado = $mysqli->query($sql);

    echo "<table  border='0px' style='border:0px'>
    <tr>
    <th>Codigo</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>TelÃ©fono</th>
    <th>Correo</th>
    <th>Empresa</th>
    <th>Modificar</th>
    <th>Eliminar</th>
    </tr>";

    while($row = mysqli_fetch_array( $resultado)) {
        echo "<tr>";
        echo "<td>" . $row['codigo'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellido'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['empresa'] . "</td>";
        echo "<td>".'<a href= "#">Modificar</a>'. "</td>";
         echo "<td>" .'<a href= "#">Eliminar</a>'. "</td>";
        echo "</tr>";
    }
    echo "</table>";
}



