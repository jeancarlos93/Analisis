
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../JS/jquery-1.12.2.min.js" type="text/javascript"> </script>
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <link href="../css/estiloTablas.css" type="text/css" rel="stylesheet"/>
        
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
            <center><h1 id="h1">Listado de Clientes</h1></center>
           
<a href="Registrar_Cliente.php">Nuevo cliente</a>
<br><br>
<div  id="nombreD">
    <form>
            <label for="nombre">Ingrese una palabra clave</label>
            <input type="text" name="nombreId" id="nombreId"  size="30" width="2"  hspace="10" align="lefth">
            <button  type="button" onclick="buscarCliente()">Buscar</button>
            <br><br></form></div>
            <div id="tabla"></div>   
        
            
            <div id="contenedor" class="container">
            <?php
                $json = getCliente();
                ?>
            
            <table id="tr" class ="table table-hover">
                <thead>
                   
                    <tr id="tr">
                        
                        <th class="text-primary">Codigo</th>
                        <th class="text-primary">Nombre</th>
                        <th class="text-primary">Apellido</th>
                        <th class="text-primary">Cedula</th>
                        <th class="text-primary">Telefono</th>
                        <th class="text-primary">Modificar</th>
                        <th class="text-primary">Eliminar</th>
                        <!--<th hidden="id">id</th>-->
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                for($i = 0; $i<count($json); $i++){
           
                    echo '<td class="text-success">'.$json[$i]->getCodigo().'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getNombre() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getApellido() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getCedula() .'</td>';                 
                    echo '<td class="text-success">'. $json[$i]->getTelefono() .'</td>'; 
                    echo "<td>".'<a href= "ModificarCliente.php?codigoCliente='.$json[$i]->getCodigo().'">Modificar</a>'. "</td>";
                    echo "<td>" .'<a href= "../Business/EliminarCliente.php?codigoCliente='.$json[$i]->getCodigo().'">Eliminar</a>'. "</td>";
                    echo '</tr>';
                }                
                ?>
                </tbody>
            </table>            
        </div>   
        
            
            
            
            
        <footer>
            <div class='define'>
                <p>Contenido del pie de pÃ¡gina</p>
            </div>  
           </footer>




</body>
</html>
