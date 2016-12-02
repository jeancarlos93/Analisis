
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
       
         <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />

        
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
            
        <div class="busqueda">    
            <label align="right" for="kwd_search">Busqueda de Proveedores:</label> <input type="text" id="kwd_search" value=""/>  
        </div>
                
        <div class="icono"><img src="../Image/proveedor.png" ></div>

          <table id="Jtabla" cellpadding="0" cellspacing="0" border="0" class="display" >
                <thead>
                    <tr id="tr">
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
                    echo '<td class="text-success">'. $json[$i]->getNombre() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getApellido() .'</td>';
                    echo '<td class="text-success">'. $json[$i]->getTelefono() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCorreo() .'</td>';                    
                    echo '<td class="text-success">'. $json[$i]->getEmpresa() .'</td>'; 
                    echo '<td><a href="../Business/EliminarProveedor.php?codigoProveedor='.$json[$i]->getCodigo().'" onclick="return confirmaEliminar()">'?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>'; 
                    echo '<td><a href="Modificar_Proveedor.php?codigoProveedor='.$json[$i]->getCodigo().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?> 

                    </tr>;
            <?php    }                
                ?>
                </tbody>
            </table>            
        </div>   
        
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
 
            targets: [1 ],
 
            orderData: [ 1, 0 ]
 
        } ]
 
    } );
 
});
 
    
    </script>
        
        <footer>
            
        </footer>
    </body>
</html>


