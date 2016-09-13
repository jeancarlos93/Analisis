<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="../css/estiloTablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
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
        <script src="js/jquery-1.9.1.min.js"></script>
        
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            <center><h1 id="h1">Listado de productos</h1></center>
            <?php
            $listProduc = getProductos();
            ?>

            <?php
            echo '<td><a href= "Registrar_Producto.php">Nuevo Producto</a></td>';
            ?>  
<br><br>
            <label align="right" for="kwd_search">Busqueda:</label> <input type="text" id="kwd_search" value=""/>  
      
       <br><br>
        <table id="my-table" class ="table table-hover">  
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Id</th>
                        <th class="text-primary">Descripción</th>
                        <th class="text-primary">Precio Unitario</th>
                        <th class="text-primary">Precio Venta</th>
                        <th class="text-primary">Marca</th>
                        <th class="text-primary">Categoría</th>
                        <th class="text-primary">**</th>
                        <th class="text-primary">**</th>
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
                            echo '<td class="text-success">' . $listProduc[$i]->getPrecioUnitario() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getPrecioVenta() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getMarca() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getCategoria() . '</td>';
                            echo '<td><a href="../Business/producto/EliminarProducto.php?codigoProducto=' . $listProduc[$i]->getId() . '">Eliminar</a></td>';
                            echo '<td><a href="Modificar_Producto.php?codigoProducto=' . $listProduc[$i]->getId() . '">Modificar</a></td>';
                            ?>
                           
                            </tr>;
                    <?php   
                            }
                        ?>
                </tbody>
            </table>  
            
            <?php
            echo '<td><a href="Registrar_marca.php?">Agregar Nueva Marca</a></td>                       ';
            echo '              <td><a href="Registrar_Categoria.php?">Agregar Nueva Categoria</a></td>';
            
            ?>
        </div>   

        <footer>
            <div class='define'>
                <p>Contenido del pie de página</p>
            </div>            
        </footer>
    </body>
</html>
