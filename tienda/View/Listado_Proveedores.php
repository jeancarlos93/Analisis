
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <link href="../css/estiloTablas.css" type="text/css" rel="stylesheet"/>
        
       
                
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
            
            <center><h1 id="h1">Listado de proveedores</h1></center>
            <?php
                $json = getProveedores();
            ?>
            
            
            <?php
                echo '<td><a href= "Registrar_Proveedor.php">Nuevo Proveedor</a></td>';                
            ?>  
            <form class="form" method="post" action="../Business/ConsultarProveedor.php" accept-charset="UTF-8" >
            <center><SELECT NAME="opcionBusqueda"> 
               <OPTION VALUE="0" selected>Codigo</OPTION>
               <OPTION VALUE="1">Nombre</OPTION>                
            </SELECT></center>
            <label>Buscar por </label><input type="text" name="campo">
<!--              $opcion = $_POST['opcionBusqueda'];?> -->
            
            <button class="submit"  type="submit">Buscar</button>
            </form>
            
            
            <table id="tr" class ="table table-hover">
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Correo</th>
                        <th class="text-primary">Direccion</th>
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
                    echo '<td class="text-success">'. $json[$i]->getTelefono() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCorreo() .'</td>';                    
                    echo '<td class="text-success">'. $json[$i]->getEmpresa() .'</td>'; 
                    echo '<td><a href="../Business/EliminarProveedor.php?codigoProveedor='.$json[$i]->getCodigo().'">Eliminar</a></td>';
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
                <p>Contenido del pie de pagina</p>
            </div>            
        </footer>
    </body>
</html>


