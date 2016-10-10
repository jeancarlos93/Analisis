<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" rel="stylesheet"/>
        <script src="../JS/Validaciones.js" type="text/javascript"> </script>
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
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
    <center><h1 class="tituloRegistros" > Datos Proveedor</h1></center>
        
          <?php
          
            $codigo = $_GET['codigoProveedor'];
            $proveedor = getObtenerProveedor($codigo);
            
            
          ?>
       <?php echo $proveedor->getCodigo() ?>
    <div class="iconoRegistro"><img src="../Image/proveedor.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/ModificarProveedor.php" accept-charset="UTF-8" >
            
                
                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $proveedor->getCodigo() ?>" required/>
		                
		<label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="name" value="<?php echo $proveedor->getNombre() ?>" onkeypress="return soloLetras(event)" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/>
                <br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido"  value="<?php echo $proveedor->getApellido() ?>" onkeypress="return soloLetras(event)" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/>
                <br><br>
                <label for="Telefono">Telefono:</label>
                <input type="tel" id="telefono" name="telefono" minlength="8" maxlength="8" value="<?php echo $proveedor->getTelefono() ?>" maxlength="8" onkeypress="return SoloNumeros(event)" onkeyup="validar_numero(this.value,this.id)"  onchange="validar_numero(this.value,this.id)" required/> 
                 <br><br>                
                <label for="Correo">Correo:</label>
                <input type="text" id="name" name="correo" value="<?php echo  $proveedor->getCorreo() ?>" onkeyup=" validar_correo(this.value,this.id)" onchange="validar_correo(this.value,this.id)" required/>
                <br><br>
                 <label for="Direccion">Empresa:</label>
                 <input type="text" id="name" name="empresa" value="<?php echo $proveedor->getEmpresa() ?>" onkeypress="return soloLetras(event)" onkeyup=" validar_letras(this.value,this.id)" onchange="validar_letras(this.value,this.id)"  required/>		
                <br><br>
                <button class="submit" type="submit">Modificar</button>
		
	    </form>
        </div>        
    </body>
    
    <footer>
    </footer>    
</html>