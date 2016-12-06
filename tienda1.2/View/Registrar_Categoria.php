<?php
        include_once '../Data/DataCargarListas.php';
        
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        
        ?>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>   
        <script src="../JS/mensajes.js" type="text/javascript"></script>               
        <script src="../JS/jquery-migrate-1.2.1.min.js" type="text/javascript"> </script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>       
        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        
        <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />      
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" /> 
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        
      <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
      </script>      
    </head>
    
    <body>
        
        <div id="header"></div>
    <center><h1 class="tituloRegistros"> Registrar Categorias de Productos</h1></center>
        <?php
            $marcas = getObtenerMarcas();  
            $categoria = getObtenerCategorias();
          ?>
          
        <div class="registrar">
            <form class="form" method="post" action="../Business/producto/RegistrarCategoria.php" accept-charset="UTF-8" >
            
		<label for="nombre">Categoria:</label>
                <input title="Nueva Categoria" type="text" id="categoria" name="categoria" required/>
		
                <button class="submit3" type="submit"  onclick="return notificarInsertado()">Guardar</button>
		
	    </form>
        </div>   
        
        <div id="header"></div>
        <div id="contenedor" class="container"> 
       <br>
        <table id="Jtabla" class ="table" cellpadding="0" cellspacing="0" border="0">  

                <thead>
                    <tr id="tr">
                        <th class="text-primary">Marca</th>
                        
                        <th class="text-primary">Modificar</th>
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                
                for($i = 0; $i<count($categoria); $i++){
                    ?> 
                        <tr onclick="document.location = '#'">
                    <?php
                    echo '<td class="text-success">'. $categoria[$i]->getCategoria() .'</td>'; 
                    
                    echo '<td><a href="ModificarCategoria.php?categoria='. $categoria[$i]->getCategoria() .'&id='.$categoria[$i]->getId().'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
                    ?> 
                    </tr>;
            <?php   
                }                
                ?>
                </tbody>
            </table> 
        </div>
        
   <script>
    //onclick="return notificarInsertado()"    
    function notificarInsertado() {
            alert("Categoría insertada");
        }
    function alerta() {  
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {      
            });
        }
   
     $(document).ready(function(){
 
    $('#Jtabla').DataTable({
 
       columnDefs: [ {
 
            targets: [ 0 ],
 
            orderData: [ 0, 1 ]
 
        }, {
 
            targets: [ 1 ],
 
            orderData: [ 1, 0 ]
 
        }, {
 
            targets: [1 ],
 
            orderData: [ 1, 0 ]
 
        } ]
 
    } );
 
});
 
    
    </script>
    </body>
    
</html>