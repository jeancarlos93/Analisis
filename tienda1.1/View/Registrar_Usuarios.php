
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
         <script src="../JS/Validaciones.js" type="text/javascript"> </script>
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
        <h1> Registrar Usuario</h1>
        
        <div id="registrar usuario">
            <form class="form" method="post" action="../Business/IngresarUsuarios.php" accept-charset="UTF-8" onsubmit="return  validar_envio()">
            
		<label for="nombreUsuario">Nombre:</label>
                <input type="text" id="name" name="nombreUsuario" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="apellidoUsuario">Apellido:</label>
                <input type="text" id="name" name="apellidoUsuario" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="cedulaUsuario">Cedula:</label>
                <input type="text" id="name" name="cedulaUsuario" maxlength="9"  onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required />
		<br><br>
                <label for="telefonoUsuario">Telefono:</label>
                <input type="text" id="name" name="telefonoUsuario" maxlength="8" onkeyup="validar_numero(this.value,this.id)" onkeypress="return SoloNumeros(event)" onchange="validar_numero(this.value,this.id)"   required />
		<br><br>
            <label for="tipoEmpleado">Tipo de Empleado:</label> <select name="tipoEmpleado" key="tipoEmpleado" class="tipoEmpleado" onChange="submit" required>
                             <option value="Empleado">Vendedor</option>
                             <option value="Vendedor">Administrador</option>
                            
                </select ><br/>
                <br><br>
                <label for="contrasenia1Usuario">Contrasenia:</label>
                <input type="password" id="password" name="contrasenia1Usuario" required/>
		<br><br>
                <label for="contrasenia2Usuario"> Confirmar Contrasenia:</label>
                <input type="password" id="confirmarPassword" name="contrasenia2Usuario" onkeyup="validar_password(this.value,this.id)" onchange="validar_password(this.value,this.name)"  required/>
		<br><br>
                <button class="submit" type="submit" >Registrar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>
