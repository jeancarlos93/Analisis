
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../JS/jquery-1.12.2.min.js" type="text/javascript"> </script>
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        
        <?php
        include_once '../Data/DataCliente.php';
        include_once '../Domain/Cliente.php';
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
            <center><h1 id="h1" class="h1">Listado de Clientes</h1></center>
       
        <div id="contenedor" class="container">
            <?php
                $json = getCliente();
            ?>
        <div class="nuevo">
            <?php
                echo'<td><a href="Registrar_Cliente.php">Nuevo cliente</a></td>';
            ?>
             
        </div> 
            
        <div class="busqueda">    
            <label align="right" for="kwd_search">Busqueda de Clientes:</label> <input type="text" id="kwd_search" value=""/>   
        </div>       
      
            <div class="icono"><img src="../Image/clientes.png" ></div>
            
        <table id="my-table" class ="table"> 
                <thead>
                   
                    <tr id="tr">
                        
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Cedula</th>
                        <th class="text-primary">Telefono</th>
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
                    echo '<td class="text-success">'.$json[$i]->getCodigo().'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getNombre() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getApellido() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCedula() .'</td>';                 
                    echo '<td class="text-success">'. $json[$i]->getTelefono() .'</td>';
                    echo '<td><a href= "Business/EliminarCliente.php?codigoCliente='.$json[$i]->getCodigo().'">'?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>';
                    echo '<td><a href= "ModificarCliente.php?codigoCliente='.$json[$i]->getCodigo().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>'; 
                    ?>
                    </tr>
             <?php    }                
                ?>
                </tbody>
            </table>            
        </div>   
            
        <footer>
            
        </footer>

</body>
</html>
