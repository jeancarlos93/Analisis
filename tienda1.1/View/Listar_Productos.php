<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <script type="text/javascript" language="javascript" src="../JS/jquery.js"></script>
     
        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />

        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        ?>
        <script>
            $(function () {
                $("#header").load("../View/Header.php");
            });
        </script>        
        <title></title>
       
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js"></script>
        <script src="../JS/jquery-1.9.1.min.js"></script>
       
       
     <!--   <style>
            div.categoria{
                width: 75%;
                height: 50%;
                position: absolute;
                left: 290px;
                top: 340px;
            }

            div.marca{
                width: 75%;
                height: 50%;
                position: absolute;
                left: 470px;
                top: 340px;
            }
        </style> -->
       
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            <center><h1 id="h1" class="h1">Listado de Productos</h1></center>
            <?php
            $listProduc = getProductos();
            ?>

            <div class="nuevo">
            <?php
            echo '<td><a href= "Registrar_Producto.php">Nuevo Producto</a></td>';
            ?>  
            </div>
          
        <div class="busqueda">   
                <label align="right" for="kwd_search">Busqueda de productos:</label> <input type="text" id="kwd_search" value=""/>  
        </div>
            
            <div class="marca">
                <?php
                    echo '<td><a href="Registrar_marca.php?">Agregar Nueva Marca</a></td>';
                 //   echo '<td><a href="Registrar_Categoria.php?">Agregar Nueva Categoria</a></td>';
                ?>
            </div>    
            
            <div class="categoria">
                <?php
                    echo '<td><a href="Registrar_Categoria.php?">Agregar Nueva Categoria</a></td>';
                ?>
            </div> 
            
           
            <div class="icono"><img src="../Image/productos.png" ></div>   
           
        
    <table id="Jtabla" cellpadding="0" cellspacing="0" border="0" class="display" >

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Descripción</th>
                        <th class="text-primary">Precio Unitario</th>
                        <th class="text-primary">Precio Venta</th>
                        <th class="text-primary">Marca</th>
                        <th class="text-primary">Categoría</th>
                        <th class="text-primary">Eliminar</th>
                        <th class="text-primary">Modificar</th>
                        <!--<th hidden="id">id</th>-->
                    </tr>
                </thead>
                <tbody id="td">
                    <?php
                    for ($i = 0; $i < count($listProduc); $i++) {
                        ?>
                        <tr onclick="document.location = '#';">
                            <?php
                            echo '<td class="text-success">' . $listProduc[$i]->getId() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getDescripcion() . '</td>';
                            echo '<td class="text-success"> ‎₡' . $listProduc[$i]->getPrecioUnitario() . '</td>';
                            echo '<td class="text-success"> ‎₡' . $listProduc[$i]->getPrecioVenta() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getMarca() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getCategoria() . '</td>';
                            echo '<td><a href="Business/producto/EliminarProducto.php?codigoProducto=' . $listProduc[$i]->getId() . '">'?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>';
                            echo '<td><a href="Modificar_Producto.php?codigoProducto=' . $listProduc[$i]->getId() . '">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                            ?>
                          
                            </tr>;
                    <?php  
                            }
                        ?>
                </tbody>
            </table> 
            
            <script>
   
     $(document).ready(function(){
 
    $('#Jtabla').DataTable({
 
       columnDefs: [ {
 
            targets: [ 0 ],
 
            orderData: [ 0, 1 ]
 
        }, {
 
            targets: [ 1 ],
 
            orderData: [ 1, 0 ]
 
        }, {
 
            targets: [3 ],
 
            orderData: [ 3, 0 ]
 
        } ]
 
    } );
 
});
 
    
    </script>

        </div>  
        
        


        <footer>          
        </footer>
    </body>
</html>