<?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>         
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        <script type="text/javascript" src="../JS/alertify.js"></script>             
        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/> 
        <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen"/>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css"/>
        <link rel="stylesheet" href="alertify.min.css"/>
        <link rel="stylesheet" href="themes/default.min.css"/>
      
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>  
      
      <?php          
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();            
          ?>
    </head>   
    
    <body>        
        <div id="header"></div>
        <div id="contenedor" class="container">
        <center><h1 class="tituloRegistros"> Registrar Marca</h1></center> 
        
        <div class="registrar">

            <form class="form" method="post" action="../Business/producto/RegistrarMarca.php" accept-charset="UTF-8" >
            
		<label for="nombre">Marca:</label>
                <input title="Nueva Marca" type="text" id="marca" name="marca" required/>
		
                <button class="submit3" type="submit">Guardar</button>
		
	    </form>           
        </div>          
<!--        <div id="header"></div>
        <div id="contenedor" class="container">         -->
        <table id="Jtabla" class ="table" cellpadding="0" cellspacing="0" border="0">  
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Marca</th>
                        <th class="text-primary">Modificar</th>               
                    </tr>
                </thead>
                <tbody id="td">
                <?php                             
                for($i = 0; $i<count($marcas); $i++){
                    ?> 
                        <tr onclick="document.location = '#'">
                    <?php
                    echo '<td class="text-success">'. $marcas[$i]->getMarca() .'</td>'; 
                    echo '<td><a href="ModificarMarca.php? marca='.$marcas[$i]->getMarca().' &id='.$marcas[$i]->getId().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?>
                    </tr>;
            <?php
                }                
                ?>
                </tbody>
            </table> 
        </div>   
        
        <script>
    //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Marca insertada");
        }

        function alerta() {
            
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {
                
            });
        }
 
   
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
    </body>
    
<!--     <footer>
            Tienda Valleche     telefono: 2710 5048    correo: vallege@tiendavallege.com
    </footer>
    -->
</html>
