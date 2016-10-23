
<?php

include_once '../Data/Data.php';
include_once '../Domain/Producto.php';
include_once '../Domain/marcaProducto.php';
include_once '../Domain/CategoriaProducto.php';

function getObtenerProducto($codigoProducto) {
   
    $mysqli = getConnection();
    $sql = "select * from producto where codigo=".$codigoProducto.";";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        
        while ($row = $resultado->fetch_assoc()) {
            $producto = new Producto();
            $producto->setId($row['codigo']);
            $producto->setDescripcion($row['descripcion']);
            $producto->setPrecioUnitario($row['precioUnitario']);
            $producto->setPrecioVenta($row['precioVenta']);
            $producto->setMarca($row['idmarcaProd']);
            $producto->setCategoria($row['idCategoriaProd']);
            $vector = $producto;
        }
    } else {
        echo "0 results".$codigoProducto."hola";
    }

    $mysqli->close();
    return $vector;
}

function getProductos() {
    $mysqli = getConnection();
    $sql = "select p.codigo,p.descripcion,marca,categoria, p.precioUnitario,p.precioVenta
from producto p inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd
where estado = 1;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        
        while ($row = $resultado->fetch_assoc()) {
            $productos = new Producto();
            $productos->setId($row['codigo']);
            $productos->setDescripcion($row['descripcion']);
            $productos->setPrecioUnitario($row['precioUnitario']);
            $productos->setPrecioVenta($row['precioVenta']);
            $productos->setMarca($row['marca']);
            $productos->setCategoria($row['categoria']);
            
            array_push($vector, $productos);
        }
    } else {
        echo "0 resultados";
    }
   
    $mysqli->close();
    return $vector;
}


function getObtenerMarcas() {

    $mysqli = getConnection();
    $sql = "select * from marcaProd;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
            $marcas = new marcaProducto();
            $marcas->setId($row['id']);
            $marcas->setMarca($row['marca']);
           
            array_push($vector, $marcas);
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;
}

function getObtenerCategorias() {

    $mysqli = getConnection();
    $sql = "select * from categoriaProd;";
    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {
        // output data of each row
        while ($row = $resultado->fetch_assoc()) {
            $categoria = new categoriaProducto();
            $categoria->setId($row['id']);
            $categoria->setCategoria($row['categoria']);
           
            array_push($vector, $categoria);
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;
}


function cosultarProducto() {    
$busqueda = $_GET["busqueda"];
    $mysqli = getConnection();
    $sql = "SELECT * FROM Producto WHERE descripcion LIKE '%$busqueda% and estado = 1;";
    $resultado = $mysqli->query($sql);
     $vector = [];
     
 if ($resultado->num_rows > 0) {
        
        while ($row = $resultado->fetch_assoc()) {
            $producto = new Producto();
            $producto->setId($row['codigo']);
            $producto->setDescripcion($row['descripcion']);
            $producto->setPrecioUnitario($row['PrecioUnitario']);
            $producto->setPrecioVenta($row['precioVenta']);
            $producto->setMarca($row['idmarcaProd']);
            $producto->setCategoria($row['idCategoriaProd']);
            $vector = $producto;
        }
    } else {
        echo "0 results";
    }

    $mysqli->close();
    return $vector;

}
?>
