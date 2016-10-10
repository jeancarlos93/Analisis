<?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
         <!--para la funcion de #header-->        
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
    <center><h1 class="tituloRegistros"> Registrar Marca</h1></center> 
        
        <div class="registrar">

            <form class="form" method="post" action="../Business/producto/RegistrarMarca.php" accept-charset="UTF-8" >
            
		<label for="nombre">Marca:</label>
                <input title="Nueva Marca" type="text" id="marca" name="marca" required/>
		
                <button class="submit2" type="submit" class="btn btn-default">Guardar</button>
		
	    </form>
            
        </div>   
        
        <div id="header"></div>
        <div id="contenedor" class="container">
          
          
      <br><br> 
      <div class="busqueda">
      <label align="right" for="kwd_search">Busqueda de Marcas:</label> <input type="text" id="kwd_search" value=""/>  
      </div>
      
     
       <br>
        <table id="my-table" class ="table">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Marca</th>
                        <th class="text-primary">Modificar</th>
                        <!--<th hidden="id">id</th>-->
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
        
        <footer>            
        </footer>
        
    </body>
    
</html>
