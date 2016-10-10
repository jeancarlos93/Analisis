

<html>
    <head>
        <meta charset="UTF-8">
        <script src="../JS/jquery-1.12.2.min.js" type="text/javascript"> </script>
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <?php
        include_once '../Data/DataUsuario.php';
        include_once '../Domain/Usuario.php';
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
            <center><h1 id="h1" class="h1">Listado de Usuarios</h1></center>
           
            <div class="nuevo">
             <?php
                $usuario = getListaUsuarios();
                echo '<td><a href= "Registrar_Usuarios.php">Nuevo Usuario</a></td>'; 
            ?>
            </div>
      <br><br>      
      <div class="busqueda">
      <label align="right" for="kwd_search">Busqueda de Usuarios:</label> <input type="text" id="kwd_search" value=""/>  
      </div>
      
      <div class="icono"><img src="../Image/usuarios.png" ></div>
       <br>
        <table id="my-table" class ="table">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Cedula</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Telefono</th>
                        <th class="text-primary">Fecha Contratado</th>
                        <th class="text-primary">Tipo Empleado</th>
                        <th class="text-primary">Contraseña</th>
                        <th class="text-primary">Eliminar</th>
                        <th class="text-primary">Modificar</th>
                        <!--<th hidden="id">id</th>-->
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                
                
                for($i = 0; $i<count($usuario); $i++){
                    ?> 
                        <tr onclick="document.location = '#';">
                    <?php
                    echo '<td class="text-success">'. $usuario[$i]->getCedula() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getNombre() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getApellido() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getTelefono() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getFechaContrato() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getTipoEmpleado() .'</td>'; 
                    echo '<td class="text-success">'. $usuario[$i]->getContrasenia() .'</td>'; 
                    echo '<td><a href= "Business/eliminarUsuario.php?cedulaUsuario='.$usuario[$i]->getCedula().'">'?><img src="../Image/delete.png" width="20px" height="20px"><?php echo'</a></td>'; 
                    echo '<td><a href="Modificar_Usuario.php?cedulaUsuario='.$usuario[$i]->getCedula().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?> 

                    </tr>;
            <?php   
                }                
                ?>
                </tbody>
            </table> 
     
        </div>   
        
        <footer>            
        </footer>
    </body>
</html>



