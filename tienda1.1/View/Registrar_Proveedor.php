
<html>
    <head>
         <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
         <!--<script type="text/javascript" src="../JS/funciones.js"></script>-->
         <link href="../css/formularios.css" rel="stylesheet"/> 
         
         <!--para la funcion de #header-->        
      <script> 
            $(function(){ 
                $("#header").load("../View/Header.php");
            });
      </script>      
    </head>
    
    <body>                 

        <div id="header"></div>
          <br><br><br><br>
        <h1> Registrar Proveedor</h1>
        
    <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/RegistrarProveedor.php" accept-charset="UTF-8" >
            
                <label for="nombre">Nombre:</label>
                <input title="Es necesario su nombre" type="text" id="name" name="nombre" required/><br>
		<!--<label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>-->
                <br>              
                <label for="apellido">Apellido:</label>
                <input type="text" id="name" name="apellido" required/><br>
		 <br>               
                <label for="telefono">Telefono:</label>
                <input type="tel" id="tel" name="telefono" required/><br>
		 <br>            
                <label for="Correo">Correo:</label>
		<input type="email" name="correo" placeholder="info@developerji.com" required /><br>
		  <br>              
                <label for="Empresa">Empresa:</label>
                <input type="text" id="camposTexto" id="name" name="empresa" required/><br>
		 <br>               
                 <button class="submit" type="submit" >Registrar</button>
		 <!--<input id="boton" typ e=button onclick="preguntar()" value="Guardar" />-->
	    </form>
        </div>
        
    </body>
    
    <footer>
        <p>footer</p>
    </footer>    
</html>