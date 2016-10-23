<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <!--para la funcion de #header-->        
      <script> 
            $(function(){  
                $("#header").load("Header.php"); 
            });
      </script>  
      <script src="../JS/mensajes.js" type="text/javascript"></script>
    </head>
    
    <body>
        <div id="header"></div>
    <center><h1 class="tituloRegistros"> Modificar Marca</h1></center>
        <?php
            $codigo = $_GET['id'];
             $nombreMarca = $_GET['marca'];
          ?>
    
     <div class="iconoRegistro2"><img src="Image/productos.png" ></div>  
        <div id="registrar">
            <form class="form" method="post" action="../Business/EliminarMarca.php" accept-charset="UTF-8" >
            <br><br><br><br><br><br> <br><br><br>
            <br><br><br><br><br><br> <br><br><br>
		<label for="nombre">Marca:</label>
                <input  type="hidden" name="id" id="name" value="<?php echo $codigo ?>"/>
                <input title="Nueva Marca" type="text" id="marca" name="marca" value="<?php echo $nombreMarca; ?>" required/>
		
                <button class="submit" type="submit" class="btn btn-default"  onclick="return notificarModificado()">Guardar</button>
		
	    </form>
        </div>        
    </body>
    
</html>

