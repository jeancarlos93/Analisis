

<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
       
        
        <?php
        include_once '../Data/DataProvedor.php';
        include_once '../Domain/Proveedor.php';
        ?>
        <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
        </script>         
        <title></title>
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            <br><br><br><br>
            <h1 id="h1">Listado de proveedores</h1>
            <?php
                $json = getProveedores();
            ?>
            
            <?php
                echo '<td><a href= "Registrar_Proveedor.php">Nuevo Proveedor</a></td>'; 
            ?>  
            
            <table id="tr" class ="table table-hover">
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Correo</th>
                        <th class="text-primary">Dirección</th>
                        <th class="text-primary">Empresa</th>
                        <th class="text-primary">**</th>
                        <th class="text-primary">**</th>
                        <!--<th hidden="id">id</th>-->
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                for($i = 0; $i<count($json); $i++){
                    ?> 
                        <tr onclick="document.location = '#';">
                    <?php
                    echo '<td class="text-success">'. $json[$i]->getCodigo() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getNombre() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getApellido() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCorreo() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getDirecion() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getEmpresa() .'</td>'; 
                    echo '<td><a href= "#">Borrar</a></td>'; 
                    echo '<td><a href="Modificar_Proveedor.php?codigoProveedor='.$json[$i]->getCodigo().'">Modificar</a></td>';
                    ?> 
<?php
                    echo '</tr>';
                }                
                ?>
                </tbody>
            </table>            
        </div>   
        
        <footer>
            <div class='define'>
                <p>Contenido del pie de página</p>
            </div>            
        </footer>
    </body>
</html>


