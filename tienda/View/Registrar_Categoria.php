
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
         
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
        <h1> Registrar Categorias de Productos</h1>
        <?php
          
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
            
          ?>
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/producto/RegistrarCategoria.php" accept-charset="UTF-8" >
            
		<label for="nombre">Categoria:</label>
                <input title="Nueva Categoria" type="text" id="categoria" name="categoria" required/>
		<label class="error" for="name" id="name_error">Debe introducir una categoria.</label><br><br>
                
                <button id="boton" type="submit" class="btn btn-default">Guardar</button>
		
	    </form>
        </div>        
    </body>
    
</html>