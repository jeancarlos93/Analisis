
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <script src="../JS/Validaciones.js" type="text/javascript"> </script>
         <link href="../css/login.css" type="text/css" rel="stylesheet"/>
         <link href="../css/menu.css" type="text/css" rel="stylesheet"/>
         <!--para la funcion de #header-->        
      <script> 
            $(function(){  
                $("#index").load("../index.php"); 
            });
      </script>      
    </head>
    
    <body>
        <div id="index"></div>
          <br><br><br><br>
    <center><h1 class="tituloSesion"> Identificate </h1></center>
    
    <div class="iconoInicioSesion"><img src="../Image/seguridad.png" ></div>
    
        <div class="inicioSesion">
            <form class="form" method="post" action="../Business/Login.php" accept-charset="UTF-8" onsubmit="return  validar_envio()">
            
		<label for="nombreUsuario">Usuario:</label>
                <input type="text" id="name" name="nombreUsuario" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<br><br>
                <label for="contrasenia1Usuario">Contraseña:</label>
                <input type="password" id="password" name="contrasenia1Usuario" onkeyup="validar_password(this.value,this.id)" onchange="validar_password(this.value,this.name)"  required/>
		<br><br>
                <button class="submit1" type="submit" >Iniciar Sesion</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
        
    </footer>    
</html>
