

<HTML>
    <HEAD>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
         
        <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>  
    </HEAD>
    <body>
        <div id="header"></div>
          <br><br><br><br>
        <h1> Registrar Clientes</h1>
        
        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/RegistrarCliente.php" accept-charset="UTF-8" >
            
		<label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="nombre" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="cedula">Cédula</label>
		<input type="text" id="name" name="cedula" />
		<label class="error" for="name" id="name_error"></label><br><br>  
                
                <label for="telefono">Teléfono:</label>
		<input type="text" id="name" name="telefono" />
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <button class="submit" type="submit" >Registrar</button>
	    </form>
        </div> 
    </body>
</HTML>

