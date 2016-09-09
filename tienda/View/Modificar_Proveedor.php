<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--para la funcion de #header-->      
         
          <?php
        include_once '../Data/DataProvedor.php';
        include_once '../Domain/Proveedor.php';
        ?>
         
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    <body>
        <div id="header"></div>
        <h1> Registrar Proveedor</h1>
        
          <?php
          
            $codigo = $_GET['codigoProveedor'];
            $proveedor = getObtenerProveedor($codigo);
            
            
          ?>
       <?php echo $proveedor->getCodigo() ?>
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/ModificarProveedor.php" accept-charset="UTF-8" >
            
                
                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $proveedor->getCodigo() ?>"/>
		                
		<label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" name="nombre" id="name" value="<?php echo $proveedor->getNombre() ?>" required/>
		<label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido"  value="<?php echo $proveedor->getApellido() ?>" required/>
		<label class="error" for="name" id="name_error">Debe introducir su apellido.</label><br><br>
                
                <label for="Correo">Correo:</label>
                <input type="text" id="name" name="correo" value="<?php echo $proveedor->getCorreo() ?>" />
		<label class="error" for="name" id="name_error">Debe introducir su Correo.</label><br><br>
                
                <label for="Dirección">Dirección:</label>
                <input type="text" id="name" name="direccion" value="<?php echo $proveedor->getDirecion() ?>" />
		<label class="error" for="name" id="name_error">Debe introducir su dirección.</label><br><br>  
                
                 <label for="Dirección">Empresa:</label>
                 <input type="text" id="name" name="empresa" value="<?php echo $proveedor->getEmpresa() ?>" />
		<label class="error" for="name" id="name_error">Debe introducir la empresa.</label><br><br>  
                
                <button id="boton" type="submit" class="btn btn-default">Modificar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>