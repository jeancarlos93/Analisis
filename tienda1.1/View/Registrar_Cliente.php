

<HTML>
    <HEAD>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/maskedInput.js" type="text/javascript"></script>
                
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
      
    </script>
    
    </HEAD>
    <body>
        <div id="header"></div>
          <br><br><br><br>
        <center><h1 class="tituloRegistros"> Registrar Clientes</h1></CENTER>
    
        <div class="iconoRegistro"><img src="../Image/clientes.png" ></div>
        
        <div class="registrar">
            <form class="form" method="post" action="../Business/RegistrarCliente.php" accept-charset="UTF-8" >
            
		<label for="nombre">Nombre:</label>
                <input type="text" id="name" name="nombre" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="cedula">Cédula</label>
		<input type="text" id="cedula" name="cedula" min="7" maxlength="9"  onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>  
                
                <label for="telefono">Teléfono:</label>
		<input type="text" id="telefono" name="telefono" min="8" maxlength="8" onkeyup="validar_numero(this.value,this.id)" onkeypress="return SoloNumeros(event)" onchange="validar_numero(this.value,this.id)" required />
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <button class="submit" type="submit" >Registrar</button>
	    </form>
        </div> 
    </body>
</HTML>

