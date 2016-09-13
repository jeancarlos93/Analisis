<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>
         <!--para la funcion de #header-->      
         
          <?php
        include_once '../Data/DataUsuario.php';
        include_once '../Domain/Usuario.php';
        ?>
         
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    <body>
        <div id="header"></div>
         <br><br><br><br> 
        <h1> Datos Usuario</h1>
        
          <?php
          
            $cedulaUsuario = $_GET['cedulaUsuario'];
            $usuario = getUsuario($cedulaUsuario);

          ?>
     
        <div id="modificarUsuario">
            <section>
                <form class="form" method="post" action="../Business/ModificarUsuario.php" accept-charset="UTF-8" >
            
                <label for="nombreUsuario">Nombre:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="nombreUsuario" value="<?php echo $usuario->getNombre() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="apellidoUsuario">Apellido:</label>
                <input type="text" id="name" name="apellidoUsuario" value="<?php echo $usuario->getApellido() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)"  required/>
		<br><br>
                <label for="cedulaUsuario">Cedula:</label>
                <input type="text" id="name" name="cedulaUsuario"  value="<?php echo $usuario->getCedula() ?>" maxlength="9" onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required/>
		<br><br>
                <label for="telefonoUsuario">Telefono:</label>
                <input type="text" id="name" name="telefonoUsuario" value="<?php echo $usuario->getTelefono() ?>" maxlength="8" onkeyup="validar_numero(this.value,this.id)" onkeypress="return SoloNumeros(event)" onchange="validar_numero(this.value,this.id)" required/>
		<br><br>
            <label for="tipoEmpleado">Tipo de Empleado:</label> <select name="tipoEmpleado" key="tipoEmpleado" class="tipoEmpleado" onChange="submit" required >
                             <option value="Empleado">Vendedor</option>
                             <option value="Administrador">Administrador</option>
                            
                </select ><br/>
                <br><br>
                <label for="contrasenia1Usuario">Contrasenia:</label>
                <input type="text" id="name" name="contrasenia1Usuario" value="<?php echo $usuario->getContrasenia() ?>" required/>
		<br><br>
                <label for="contrasenia2Usuario"> Confirmar Contrasenia:</label>
                <input type="text" id="name" name="contrasenia2Usuario" onkeyup="validar_password(this.value,this.id)" onchange="validar_password(this.value,this.name)"  required/>
		<br><br>
                <button class="submit" type="submit">Modificar</button>
		
	    </form>
            
           </section> 
        </div>    
          
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>