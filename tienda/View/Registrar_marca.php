
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
         <!--para la funcion de #header-->        
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    
    <body>
        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
        <div id="header"></div>
          <br><br><br><br>
        <h1> Registrar Marca</h1>
        <?php
          
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
            
          ?>
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/producto/RegistrarMarca.php" accept-charset="UTF-8" >
            
		<label for="nombre">Marca:</label>
                <input title="Nueva Marca" type="text" id="marca" name="marca" required/>
		<label class="error" for="name" id="name_error">Debe introducir una marca.</label><br><br>
                
                <button id="boton" type="submit" class="btn btn-default">Guardar</button>
		
	    </form>
        </div>        
    </body>
    
</html>
