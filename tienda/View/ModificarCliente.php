
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--para la funcion de #header-->      
         
          <?php
        include_once '../Data/DataCliente.php';
        include_once '../Domain/Cliente.php';
        ?>
         
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    <body>
       <div id="header"></div>
       
       <br> <br> <br> <br>
        <h1>Datos Clientes</h1>
        
          <?php
          
            $codigo = $_GET['codigoCliente'];
            $cliente = getObtenerCliente($codigo);
            
           
          ?>
       <?php echo $cliente->getCodigo()?>
        
        <div id="registrarCliente">
            <form class="form" method="post" action="../Business/Modificar_Cliente.php" accept-charset="UTF-8" >
             
		                
		<label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" name="nombre" id="name" value="<?php echo $cliente->getNombre() ?>" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido"  value="<?php echo $cliente->getApellido() ?>" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                <label for="Dirección">Cédula: </label>
                <input type="text" id="name" name="cedula" value="<?php echo $cliente->getCedula() ?>" />
		<label class="error" for="name" id="name_error"></label><br><br>  
                
                <label for="Correo">Teléfono</label>
                <input type="text" id="name" name="telefono" value="<?php echo $cliente->getTelefono() ?>" />
		<label class="error" for="name" id="name_error"></label><br><br>
                
             
                <button class="submit" type="submit">Modificar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>

