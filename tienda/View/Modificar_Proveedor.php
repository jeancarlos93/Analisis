<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
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
        <h1> Datos Proveedor</h1>
        
          <?php
          
            $codigo = $_GET['codigoProveedor'];
            $proveedor = getObtenerProveedor($codigo);
            
            
          ?>
       <?php echo $proveedor->getCodigo() ?>
        
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/ModificarProveedor.php" accept-charset="UTF-8" >
            
                
                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $proveedor->getCodigo() ?>" required/>
		                
		<label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" name="nombre" id="name" value="<?php echo $proveedor->getNombre() ?>" required/>
                <br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido"  value="<?php echo $proveedor->getApellido() ?>" required/>
                <br><br>
                <label for="Telefono">Telefono:</label>
                <input type="tel" id="name" name="telefono" minlength="8" maxlength="8" value="<?php echo $proveedor->getTelefono() ?>" required/> 
                 <br><br>                
                <label for="Correo">Correo:</label>
                <input type="text" id="name" name="correo" value="<?php echo  $proveedor->getCorreo() ?>" required/>
                <br><br>
                 <label for="DirecciÃ³n">Empresa:</label>
                 <input type="text" id="name" name="empresa" value="<?php echo $proveedor->getEmpresa() ?>" required/>		
                <br><br>
                <button class="submit" type="submit">Modificar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>