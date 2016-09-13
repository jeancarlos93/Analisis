

<html>
    <head>
        <meta charset="UTF-8">
        <script src="../JS/jquery-1.12.2.min.js" type="text/javascript"> </script>
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <link href="../css/estiloTablas.css" type="text/css" rel="stylesheet"/>
        
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
            <center><h1 id="h1">Listado de Usuarios</h1></center>
           
             <?php
                $usuario = getListaUsuarios();
                echo '<td><a href= "Registrar_Usuarios.php">Nuevo Usuario</a></td>'; 
            ?>
      <br><br>      
      <section>
      <label align="right" for="kwd_search">Busqueda:</label> <input type="text" id="kwd_search" value=""/>  
      
       <br>
        <table id="my-table" class ="table table-hover">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Cedula</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Telefono</th>
                        <th class="text-primary">Fecha Contratado</th>
                        <th class="text-primary">Tipo Empleado</th>
                        <th class="text-primary">Contraseña</th>
                        <th class="text-primary">**</th>
                        <th class="text-primary">**</th>
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
                    echo '<td><a href= "../Business/eliminarUsuario.php?cedulaUsuario='.$usuario[$i]->getCedula().'">Eliminar</a></td>'; 
                    echo '<td><a href="Modificar_Usuario.php?cedulaUsuario='.$usuario[$i]->getCedula().'">Modificar</a></td>';
                    ?> 

                    </tr>;
            <?php   
                }                
                ?>
                </tbody>
            </table> 
          </section>
        </div>   
        
        <footer>
            <div class='define'>
                <p>Contenido del pie de página</p>
            </div>            
        </footer>
    </body>
</html>



