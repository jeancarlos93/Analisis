<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--<script type="text/javascript" src="../JS/funciones.js"></script>-->
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/Validaciones.js" type="text/javascript"></script>
         <script src="../JS/maskedInput.js" type="text/javascript"></script>
                
         <script src="../JS/mensajes.js" type="text/javascript"></script>
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        
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
    <center><h1 class="tituloRegistros"> Registrar Proveedor</h1></center>
    
    <div class="iconoRegistro"><img src="../Image/proveedor.png" ></div>
        
    <div class="registrar">
            <form class="form" method="post" action="../Business/RegistrarProveedor.php" accept-charset="UTF-8" >
            
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" onkeypress="return soloLetras(event)" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/><br>
		<!--<label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>-->
                <br>              
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" onkeypress="return soloLetras(event)"onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/><br>
		 <br>               
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" maxlength="8" required /><br>  
		<br>            
                <label for="Correo">Correo:</label>
		<input type="email" id="correo" name="correo" placeholder="info@developerji.com" onkeyup=" validar_correo(this.value,this.id)" onchange="validar_correo(this.value,this.id)"  required /><br>
		 <br>              
                <label for="Empresa">Empresa:</label>
                <input type="text" id="camposTexto" id="name" name="empresa" onkeypress="return soloLetras(event)" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/><br>
		 <br>               
                 <button class="submit" type="submit" onclick="return notificarInsertado()">Registrar</button>
		 <!--<input id="boton" typ e=button onclick="preguntar()" value="Guardar" />-->
	    </form>
        </div>
        
    </body>
    <script>
    //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Proveedor insertado");
        }
    </script>
    <script>
        function alerta() {
            
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {
                
            });
        }
    </script>
    <footer>
        <p>footer</p>
    </footer>    
</html>