<html>
    <head>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
         <script src="../JS/Validaciones.js" type="text/javascript"> </script>
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

      });
      
      $(function () {
                $("#header").load("../View/Header.php");
                $("#vmodal").load("../View/VentanaModal.php");
                $("#vmodalMarca").load("../View/VeMod_InsertarMarca.php");
                });     
            function abrirVentana() {
                $("#vmodal").load($(".ventanamodal").slideDown("slow"));
            }
            function cerrarVentana() {
                $(".ventanamodal").slideUp("slow");
            }
            
            function abrirVentanaMarca() {
                $("#vmodalMarca").load($(".ventanamodalMarca").slideDown("slow"));
            }

            function cerrarVentanaMarca() {
                $(".ventanamodalMarca").slideUp("slow");
            } 
            
        </script> 
      
      
         
         
           
    </head>
    
    
    <body>
        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
        <div id="header"></div>
    <center><h1 class="tituloRegistros"> Registrar Producto</h1></center>
        <?php
          
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
            
          ?>
    
    <div class="iconoRegistro"><img src="../Image/productos.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/producto/RegistrarProducto.php" accept-charset="UTF-8" >
            
		<label for="nombre">Descripción:</label>
                <input title="Es necesario su nombre" type="text" id="descripcion" name="descripcion" required/>
		<br><br>
                <label for="PrecioUnitario">Precio Unitario:</label>
                <input type="text" id="precioUnitario" name="precioUnitario" onkeyup="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required/>
		<br><br>
                <label for="PrecioVenta" >Precio de venta:</label>
                <input type="text" id="precioVenta" name="precioVenta" onkeyup="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required/>
		
                <br><br>
                <label for="Categoría">Categoría:</label>
            <input type="text" id="trr" name="trr" readonly="readonly" required /> <a href="#" onclick="javascript:abrirVentana();">Seleccionar Categoría</a>
            <input type="hidden" id="idtrr" name="idtrr" required/> 
            
                <br><br>
                <input type="text" id="marcaSelec" name="marcaSelec" readonly="readonly" required=""/> <a href="#"  onclick="javascript:abrirVentanaMarca();">Seleccionar Marca</a>
            <input type="hidden" id="idmarcaSelec" name="idmarcaSelec" required/> 
                
                <br><br>
               <button class="submit" type="submit" onclick="return notificarInsertado()" >Registrar</button>
		
	    </form>    
            
        </div> 

    <div id="vmodal"></div> 
    <div id="vmodalMarca"></div>
    </body>
    <link href="../css/ventanaModal.css" rel="stylesheet" type="text/css"/>
</html>