
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" rel="stylesheet"/>     
        <script src="../JS/Validaciones.js" type="text/javascript"> </script>     
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
        
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        
          <?php
        include_once '../Data/DataCliente.php';
        include_once '../Domain/Cliente.php';
        ?>
       
                
      <script> 
            $(function(){ 
                $("#header").load("../View/Header.php");
            });
      </script> 
      
      <script>
      $(document).ready(function($){
          
           $('#telefono').mask("9999 9999");
      
          $('#cedula').mask("9 9999 9999");;

          $('#precioUnitario').mask("99999999",{placeholder: "â‚¡        "});
          
          $('#precioVenta').mask("99999999",{placeholder: "â‚¡           "});
          
      });
      
      </script>      
    </head>
    
    <body>
       <div id="header"></div>
       
       <br> <br> <br> <br>
    <center><h1 class="tituloRegistros">Datos Clientes</h1></center>
        
          <?php
          
            $codigo = $_GET['codigoCliente'];
            $cliente = getObtenerCliente($codigo);
            
           
          ?>
       <?php echo $cliente->getCodigo()?>
    
    <div class="iconoRegistro"><img src="../Image/clientes.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/Modificar_Cliente.php" accept-charset="UTF-8" >
             
		  <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $cliente->getCodigo() ?>"/>           
		                
		<label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="name" value="<?php echo $cliente->getNombre() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido"  value="<?php echo $cliente->getApellido() ?>" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)" onkeypress="return soloLetras(event)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                <label for="Dirección">Cédula: </label>
                <input type="text" id="cedula" name="cedula" value="<?php echo $cliente->getCedula() ?>" min="7" maxlength="9"  onkeyup="validar_cedula(this.value,this.id)" onchange="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)"/>
		<label class="error" for="name" id="name_error"></label><br><br>  
                
                <label for="Correo">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $cliente->getTelefono() ?>" min="8" maxlength="8" onkeyup="validar_numero(this.value,this.id)" onkeypress="return SoloNumeros(event)" onchange="validar_numero(this.value,this.id)" required/>
		<label class="error" for="name" id="name_error"></label><br><br>
                
             
                <button class="submit" type="submit" onclick="return notificarModificado()" >Modificar</button>
		
	    </form>
        </div>        
    </body>
    <script>
         //onclick="return notificarInsertado()"    
    function notificarModificado() {
            alert("Se ha modificado con exito");
        }
        function alerta() {  
            alertify.alert("<b>Mensaje</b> Eliminado", function () {      
            });
        }
    </script>
    <footer>
    </footer>    
</html>

