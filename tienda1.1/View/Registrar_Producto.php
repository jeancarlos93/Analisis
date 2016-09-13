
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
        <h1> Registrar Producto</h1>
        <?php
          
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
            
          ?>
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/producto/RegistrarProducto.php" accept-charset="UTF-8" >
            
		<label for="nombre">Descripción:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="descripcion" required/>
		<br><br>
                <label for="PrecioUnitario">Precio Unitario:</label>
                <input type="text" id="name" name="precioUnitario" required/>
		<br><br>
                <label for="PrecioVenta">Precio de venta:</label>
		<input type="text" id="name" name="precioVenta" />
		<br><br>
                <label for="Categoría">Categoría:</label>
                <select name="categoria">
                <?php for($i = 0; $i<count($categoria); $i++){
                          echo '<option value="'. $categoria[$i]->getId().'">'. $categoria[$i]->getCategoria() .'</option>'; 
                          } ?>
                </select><br><br>
                
                <label for="Marcas">Marca:</label>
                <select name="marcas">
                <?php for($i = 0; $i<count($marcas); $i++){
                          echo '<option value="'. $marcas[$i]->getId().'">'. $marcas[$i]->getMarca() .'</option>'; 
                          }?>
                </select><br><br>
                <button class="submit" type="submit" >Registrar</button>
		
	    </form>
            
            
        </div>        
    </body>
    
</html>