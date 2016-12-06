<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--<script type="text/javascript" src="../JS/funciones.js"></script>-->
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/Validaciones.js" type="text/javascript"></script>
         <script src="../JS/maskedInput.js" type="text/javascript"></script>
         
         <script src="../JS/CalculosAbono.js" type="text/javascript"></script> 
         
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
      
      <?php
        include_once '../Data/DataAbono.php';
        include_once '../Domain/Abono.php';
        ?>        
      
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
    <center><h1 class="tituloRegistros"> Registrar Abonos</h1></center>
    
     <?php
        $codigoFactura = $_GET['codigo'];
        $tipoFactura = $_GET['tipoFactura'];
        $saldoAPagar= getTotalApagar($codigoFactura);
    ?>
    
    <div class="iconoRegistro"><img src="../Image/proveedor.png" ></div>
        
    <div class="registrar">
            <form class="form" method="post" action="../Business/RegistrarAbono.php?factura=<?php echo $tipoFactura ?>" accept-charset="UTF-8" >
            
                <label for="nombre">Codigo Factura:</label>
                <input type="text" id="codigo" name="facturaCompra" value="<?php echo $codigoFactura ?>" required/><br>		
                <br>               
                <label for="apellido">tipo:</label>
                <input type="text" id="tipo" name="tipo" required/><br>                       
		 <br>            
                <label for="Correo">Saldo Inicial:</label>
                <input type="text" id="saldoInicial" name="SaldoInicial" value="<?php echo $saldoAPagar->getSaldoInicial()?>" required/><br>
		  <br> 
                  
                  <label for="telefono">Abono:</label>
                <input type="text" id="abono" name="Abono" value="0" onChange="calculo(abono.value,saldoInicial.value,saldoFinal)" required/><br>
                
                <br> 
                   <label for="Correo">Saldo Final:</label>
                   <input type="text" id="saldoFinal" name="SaldoFinal" required /><br>
		  <br>                               
                 <button class="submit" type="submit" onclick="return notificarInsertado()">Registrar</button>
		
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