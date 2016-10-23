<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/Autocomplete.js" type="text/javascript"></script>
        <script src="../JS/mensajes.js" type="text/javascript"></script>

        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Data/Data.php';
        include_once '../Domain/Producto.php';
        require_once '../libs/Zebra_Pagination.php';
        ?>
        <script>
            $(function () {
                $("#header").load("Header.php");
            });
        </script>         
        <title></title>

        <script type="text/javascript" src="JS/funciones.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/mootools/1.6.0/mootools.min.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>


        <style>
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
        </style>

    </head>
    <body>
        <?php
        echo '<td><a href="Registrar_marca.php?">Agregar Nueva Marca</a></td>                       ';
        echo '              <td><a href="Registrar_Categoria.php?">Agregar Nueva Categoria</a></td>';
        ?>
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

            <div class="icono"><img src="Image/productos.png" ></div>    

            <table id="my-table" class ="table">  
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Id</th>
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
                            echo '<td class="text-success">' . $listProduc[$i]->getPrecioUnitario() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getPrecioVenta() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getMarca() . '</td>';
                            echo '<td class="text-success">' . $listProduc[$i]->getCategoria() . '</td>';
                            echo '<td><a href="../Business/producto/EliminarProducto.php?codigoProducto=' . $listProduc[$i]->getId() . '"onclick="return confirmaEliminar()">'
                            ?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>';
                        echo '<td><a href="Modificar_Producto.php?codigoProducto=' . $listProduc[$i]->getId() . '">'
                            ?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                            ?>
                    </tr>;
                    <?php
                }
                ?>
                </tbody>
            </table>  
        </div>   
        <script>
            function notificarInsertado() {
                alert("Categoría insertada");
            }
            
            function alerta() {
                alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {
                });           }

            function confirmar() {
                //un confirm
                alertify.confirm("<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function (e) {
                    if (e) {
                        alertify.success("Has pulsado '" + alertify.labels.ok + "'");
                        header("Location:  Business/producto/EliminarProducto.php?codigoProducto= $listProduc[$i]->getId()");

                        Modificar_Producto.php?codigoProducto = ' . $listProduc[$i]->getId() . '"
                    } else {
                        alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
                    }
                });
                return false
            }

        </script>
        <footer>           
        </footer>
    </body>
</html>
