<?PHP


include_once '../Data/Data.php';
include_once '../Domain/Inventario.php';


function getInventario($tipoConsulta) {
    
    $mysqli = getConnection();
    $tituloConsulta;
    if ($tipoConsulta == 4) {
        $sql = "select p.codigo,p.descripcion,p.precioUnitario,p.precioVenta,i.cantidad, marca,categoria,i.fecha,i.tipo,tp.talla, cp.color, if(i.tipo = 'entrada',p.precioUnitario*i.cantidad,p.precioVenta*i.cantidad) as total 
from inventario i 
inner join producto p  on p.codigo = i.codProducto
inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd
inner join tallaProd tp on tp.id=i.idTalla
inner join colorProd cp on cp.id=i.idColor;";
        
         $tituloConsulta="Entradas y salidas";
    } else if ($tipoConsulta == 1)
        {
        $sql = " select p.codigo,p.descripcion,marca,p.precioVenta,i.cantidad, categoria,i.fecha,i.tipo,tp.talla, cp.color, if(i.tipo = 'entrada',p.precioUnitario*i.cantidad,p.precioVenta*i.cantidad) as total 
from inventario i 
inner join producto p  on p.codigo = i.codProducto
inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd
inner join tallaProd tp on tp.id=i.idTalla
inner join colorProd cp on cp.id=i.idColor
where tipo = 'entrada';";
         $tituloConsulta="entrada";
    } else if ($tipoConsulta == 2)
        {
        $sql = "   select p.codigo,p.descripcion,marca,p.precioVenta,i.cantidad,categoria,i.fecha,i.tipo,tp.talla, cp.color, if(i.tipo = 'entrada',p.precioUnitario*i.cantidad,p.precioVenta*i.cantidad) as total 
from inventario i 
inner join producto p  on p.codigo = i.codProducto
inner join categoriaProd c on c.id = p.idCategoriaProd
inner join marcaProd m on m.id=p.idmarcaProd
inner join tallaProd tp on tp.id=i.idTalla
inner join colorProd cp on cp.id=i.idColor
where tipo = 'Salida';";
        $tituloConsulta="Salida";
        
    } else {
        $sql = "select inventario.codProducto,p.precioVenta,p.descripcion,(cantidadEntrada - cantidadSalida) as cantidad,
cp.color,tp.talla,categoria,marca,p.precioVenta*(cantidadEntrada - cantidadSalida) as total
from inventario
join(select codProducto,sum(cantidad) as cantidadEntrada,
idTalla,idColor
 from inventario
 where tipo='entrada' 
 group by codProducto,idTalla,idColor) entradas on entradas.codProducto = inventario.codProducto 
												and entradas.idTalla = inventario.idTalla 
                                                and entradas.idColor = inventario.idColor
join(select codProducto,sum(cantidad) as cantidadSalida,
idTalla,idColor
 from inventario
 where tipo='salida'
 group by codProducto,idTalla,idColor) salidas on salidas.codProducto = inventario.codProducto 
												and salidas.idTalla = inventario.idTalla 
                                                and salidas.idColor = inventario.idColor
join colorProd cp on cp.id = inventario.idColor 
join tallaProd tp on tp.id = inventario.idTalla
join producto p on p.codigo = inventario.codProducto
join marcaProd mp on mp.id= p.idmarcaProd
join categoriaProd cpd on cpd.id= p.idCategoriaProd
where (cantidadEntrada - cantidadSalida)>0
 group by codProducto,cp.color,tp.talla; ";
       // $tituloConsulta="Inventario";
    }

    $resultado = $mysqli->query($sql);
    $vector = [];

    if ($resultado->num_rows > 0) {

        while ($row = $resultado->fetch_assoc()) {
            
            $Inventario = new Inventario();
            //$Inventario->setId($row['codigo']);
            $Inventario->setPrecio($row['precioVenta']);
            $Inventario->setCantidad($row['cantidad']);
            $Inventario->setDescripcion($row['descripcion']);
            $Inventario->setMarca($row['marca']);
            $Inventario->setCategoria($row['categoria']);
           // $Inventario->setTalla($row['talla']);
           // $Inventario->setColor($row['color']);
           // $Inventario->setFecha($row['fecha']);
            //$Inventario->setTipo($row['tipo']);
            $Inventario->setTotal($row['total']);
            array_push($vector, $Inventario);
        }
    } else {
       echo $argumento = '';
    }
    $mysqli->close();
   echo $argumento = json_encode($vector);
    return $argumento; 
}

?>

