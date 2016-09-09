
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--para la funcion de #header-->        
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    <body>
        <div id="header"></div>
          <br><br><br><br>
        <h1> Registrar Proveedor</h1>
        
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/RegistrarProveedor.php" accept-charset="UTF-8" >
            
		<label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="nombre" required/>
		<label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido" required/>
		<label class="error" for="name" id="name_error">Debe introducir su apellido.</label><br><br>
                
                <label for="Correo">Correo:</label>
		<input type="text" id="name" name="correo" />
		<label class="error" for="name" id="name_error">Debe introducir su Correo.</label><br><br>
                
                <label for="Dirección">Dirección:</label>
		<input type="text" id="name" name="direccion" />
		<label class="error" for="name" id="name_error">Debe introducir su dirección.</label><br><br>  
                
                 <label for="Dirección">Empresa:</label>
		<input type="text" id="name" name="empresa" />
		<label class="error" for="name" id="name_error">Debe introducir la empresa.</label><br><br>  
                
                <button id="boton" type="submit" class="btn btn-default">Guardar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>