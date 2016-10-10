<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/Autocomplete.js" type="text/javascript"></script>

        <?php
        include_once '../Data/DataInventario.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/Inventario.php';
        ?>
        <script>
            $(function () {
                $("#header").load("../View/Header.php");
            });
        </script>         
        <title></title>

        <script type="text/javascript" src="../JS/funciones.js"></script>

    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            <center><h1 id="h1" class="h1">Inventario</h1></center>
            
            <center> <h2> <?php $opcion = $_GET['opcion'];
            echo '('.$opcion.')'; ?> </h2></center>
            <?php
            
            $listInvent = unserialize(urldecode(stripslashes($_GET['resultado'])));
            ?>
            <form class="form" method="get" action="../Business/ConsultarInventario.php" accept-charset="UTF-8" >
                <div class="selector">
                
                    <select name="buscarPor">
                        <option value="1">Entradas</option>
                        <option value="2">Salidas</option> 
                        <option value="3">En inventario</option> 
                        <option value="4"selected >Todo</option>
                    </select>
                <button class="submit"  type="submit">Buscar</button>
                
                </div> 
            </form>
            <br>
            
            <br>
            <div class="busqueda">
            <label align="right" for="kwd_search">Busqueda:</label> <input type="text" id="kwd_search" value=""/>  
            </div> 
            <br><br>
            <table id="my-table" class ="table table-hover">  
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Descripción</th>
                        <th class="text-primary">Marca</th>
                        <th class="text-primary">Categoría Venta</th>
                        <th class="text-primary">Talla</th>
                        <th class="text-primary">Color</th>
                        <th class="text-primary">Tipo</th>
                        <th class="text-primary">Total</th>
                        <!--<th hidden="id">id</th>-->
                    </tr>
                </thead>
                <tbody id="td">
                    <?php
                    for ($i = 0; $i < count($listInvent); $i++) {
                        ?>
                        <tr onclick="document.location = '#';">
                            <?php
                            echo '<td class="text-success">' . $listInvent[$i]->getId() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getDescripcion() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getMarca() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getCategoria() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getTalla() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getColor() . '</td>';
                            echo '<td class="text-success">' . $listInvent[$i]->getTipo() . '</td>';
                            echo '<td class="text-success"> ‎₡' . $listInvent[$i]->getTotal() . '</td>';
                            ?>
                        </tr>
                            <?php
                        }
                        ?>
                </tbody>
            </table>  

<?php ?>
        </div>   

        <footer>
            <div class='define'>
                <p>Contenido del pie de página</p>
            </div>            
        </footer>
    </body>
</html>