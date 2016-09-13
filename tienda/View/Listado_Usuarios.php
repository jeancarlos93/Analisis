

<html>
    <head>
        <meta charset="UTF-8">
        
        <link href="../css/style.css" type="text/css" rel="stylesheet" />
        <link href="../css/dataTables.css" type="text/css" rel="stylesheet"/>
        <link href="../css/jquery-ui.css" type="text/css" rel="stylesheet"/>
        
        <script src="../JS/jquery.js" type="text/javascript"> </script>
        <script src="../JS/jquery-ui.js" type="text/javascript"> </script>
        <script src="../JS/datatables.js" type="text/javascript"> </script>
        <script src="../JS/functions.js" type="text/javascript"> </script>
        
      <!--   <script type="text/javaScript" src="JS/funciones.js"></script> -->

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
            <br><br><br><br> 
            <h1 id="h1">Listado de Usuarios</h1>
           

             <?php
             
             $usuario = getListaUsuarios();
             
                
             //   $cedulaUsuario = $_GET['cedulaUsuario'];
             //   $elimincion = eliminarUsuario($cedulaUsuario);

            ?>
            
            <?php
                echo '<td><a href= "Registrar_Usuarios.php">Nuevo Usuario</a></td>'; 
            ?>  
            
    <!-- Metodo Consultar -->
    
    <form>  
<br><br>
<div  id="nombreD">
    <p>Ingrese una palabra clave</p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombreId" id="nombreId"  size="30" width="2"  hspace="10" align="lefth" ><button  type="button" onclick="buscarCliente()">Buscar</button>
            <br><br>
            <div id="tabla"> 
            </div>
</div></form><br>

    <!-- Fin Metodo Consultar -->
    
      <br><br><br><br> 

    <!--    <input type="text" id="kwd_search" value=""/><p><input type="submit" value="Buscar"/></p>  -->

      <section>
            <table id="table"  class ="table table-hover">
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
<?php
                    echo '</tr>';
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



