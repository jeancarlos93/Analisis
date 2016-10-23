<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/maskedInput.js" type="text/javascript"></script>
         <!--para la funcion de #header-->      
         
         <script src="../JS/mensajes.js" type="text/javascript"></script>
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        
         
          <?php
        include_once '../Data/DataUsuario.php';
        include_once '../Domain/Usuario.php';
        ?>
         
                
      <script> 
            $(function(){ 
                $("#header").load("../View/Header.php");
            });
      </script> 
      
      <script>
      $(document).ready(function($){
          
         $('#telefono').mask("9999 9999",{placeholder: "____-____"});
      
          $('#cedula').mask("9 9999 9999",{placeholder: "_-____-____"});

          $('#precioUnitario').mask("99999999",{placeholder: "â‚¡        "});
          
          $('#precioVenta').mask("99999999",{placeholder: "â‚¡           "});
          
      });
      
      </script>      
    </head>
    
    <body>
        <div id="header"></div>
         <br><br><br><br> 
        <center><h1 class="tituloRegistros"> Datos Usuario</h1></center>
        
        <div class="iconoRegistro"><img src="../Image/registro.png" ></div>
          <?php
          
            $cedulaUsuario = $_GET['cedulaUsuario'];
            $usuario = getUsuario($cedulaUsuario);

          ?>
     
        <div class="registrar">
                <form class="form" method="post" action="../Business/ModificarUsuario.php" accept-charset="UTF-8" >
            
                <label for="nombreUsuario">Nombre:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="nombreUsuario" value="<?php echo $usuario->getNombre() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="apellidoUsuario">Apellido:</label>
                <input type="text" id="name" name="apellidoUsuario" value="<?php echo $usuario->getApellido() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)"  required/>
		<br><br>
                <label for="cedulaUsuario">Cedula:</label>
                <input type="text" id="cedula" name="cedulaUsuario"  value="<?php echo $usuario->getCedula() ?>" maxlength="9" onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" />
		<br><br>
                <label for="telefonoUsuario">Telefono:</label>
                <input type="text" id="telefono" name="telefonoUsuario" value="<?php echo $usuario->getTelefono() ?>" maxlength="8" onkeyup="validar_numero(this.value,this.id)" onkeypress="return SoloNumeros(event)" onchange="validar_numero(this.value,this.id)" />
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
                <input type="text" id="name" name="contrasenia2Usuario" value="<?php echo $usuario->getContrasenia() ?>" onkeyup="validar_password(this.value,this.id)" onchange="validar_password(this.value,this.name)"  required/>
		<br><br>
                <button class="submit" type="submit" onclick="return notificarModificado()" >Modificar</button>
		
	    </form>
        </div>    
          
    </body>
    <script>
         //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Usuario modificado");
        }
        function alerta() {  
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {      
            });
        }
    </script>
    <footer>
    </footer>    
</html>