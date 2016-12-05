<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" rel="stylesheet"/>
        <script src="../JS/Validaciones.js" type="text/javascript"> </script>
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
        include_once '../Data/DataAbono.php';
        include_once '../Domain/Abono.php';
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
    <center><h1 class="tituloRegistros" >Modificar Abonos</h1></center>
        
          <?php
          
            $codigo = $_GET['codigoAbono'];
            $abono = getModificarAbono($codigo);
            $codigoFactura = $_GET['codigoFactura'];
            
          ?>
       
    <div class="iconoRegistro"><img src="../Image/proveedor.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/RegistrarAbono.php" accept-charset="UTF-8" >
            
                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $abono->getCodigo() ?>" required/>
                 
                <label for="nombre">Factura Compra:</label>
                <input type="text" id="nombre" name="facturaCompra" value="<?php echo $codigoFactura ?>" required/><br>		
                <br>                                                
                 <label for="nombre">Factura Venta:</label>
                <input type="text" id="nombre" name="facturaVenta" value="<?php echo $abono->getFacturaVenta() ?>" required/><br>
                <br>
                <label for="apellido">tipo:</label>
                <input type="text" id="apellido" name="tipo" value="<?php echo $abono->getTipo() ?>" required/><br>
		 <br>               
                <label for="telefono">Abono:</label>
                <input type="text" id="camposTexto" name="Abono" value="<?php echo $abono->getAbono() ?>" required/><br> 
		 <br>            
                <label for="Correo">Saldo Inicial:</label>
                <input type="text" id="correo" name="SaldoInicial" value="<?php echo $abono->getSaldoInicial() ?>"  required /><br>
		  <br> 
                   <label for="Correo">Saldo Final:</label>
                   <input type="text" id="correo" name="SaldoFinal" value="<?php echo $abono->getSaldoFinal() ?>" required /><br>
		  <br>                               
                 <button class="submit" type="submit" onclick="return notificarInsertado()">Modificar</button>	
	    </form>
        </div>        
    </body>
    <script>
         //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Abono modificado");
        }
        function alerta() {  
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {      
            });
        }
    </script>   
</html>