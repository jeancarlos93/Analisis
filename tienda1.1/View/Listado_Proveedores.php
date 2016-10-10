
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
       
                
        <?php
        include_once '../Data/DataProvedor.php';
        include_once '../Domain/Proveedor.php';
        ?>
        
        <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
        </script>  
           
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            
            <center><h1 class="h1" id="h1">Listado de proveedores</h1></center>
            <?php
                $json = getProveedores();
            ?>
            
            <div class="nuevo">
            <?php
                echo '<td><a href= "Registrar_Proveedor.php">Nuevo Proveedor</a></td>';                
            ?>  
            </div>    
    <!--   <form class="form" method="post" action="../Business/ConsultarProveedor.php" accept-charset="UTF-8" > -->
            
        <div class="busqueda">    
            <label align="right" for="kwd_search">Busqueda de Proveedores:</label> <input type="text" id="kwd_search" value=""/>  
        </div>
                
        <div class="icono"><img src="../Image/proveedor.png" ></div>
            
       <br>
        <table id="my-table" class ="table">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Correo</th>
                        <th class="text-primary">Direccion</th>
                        <th class="text-primary">Empresa</th>
                        <th class="text-primary">Eliminar</th>
                        <th class="text-primary">Modificar</th>
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
                    echo '<td class="text-success">'. $json[$i]->getTelefono() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCorreo() .'</td>';                    
                    echo '<td class="text-success">'. $json[$i]->getEmpresa() .'</td>'; 
                    echo '<td><a href="Business/EliminarProveedor.php?codigoProveedor='.$json[$i]->getCodigo().'">'?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>'; 
                    echo '<td><a href="Modificar_Proveedor.php?codigoProveedor='.$json[$i]->getCodigo().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?> 

                    </tr>;
            <?php    }                
                ?>
                </tbody>
            </table>            
        </div>   
        
        <footer>
            
        </footer>
    </body>
</html>


