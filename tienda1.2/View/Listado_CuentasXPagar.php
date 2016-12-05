
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>       
        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />

        <?php
        include_once '../Data/DataCuentaXPagar.php';
        include_once '../Domain/CuentaXPagar.php';
        ?>
        
        <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
        </script>  
           
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            
            <center><h1 class="h1" id="h1">Listado de Cuentas por Pagar</h1></center>
            <?php
                $json = getCuentaXPagar();
            ?>
      
        <div class="busqueda">    
            <label align="right" for="kwd_search">Busqueda de cuenta:</label> <input type="text" id="kwd_search" value=""/>  
        </div>
                
        <div class="icono"><img src="../Image/proveedor.png" ></div>
            
       <br>
          <table id="Jtabla" cellpadding="0" cellspacing="0" border="0" class="display" >
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Numero Factura</th>
                         <th class="text-primary">Realizada por</th>
                        <th class="text-primary">Proveedor</th>
                        <th class="text-primary">Abonos</th>
                        <th class="text-primary">Total Factura</th>
                        <th class="text-primary">Fecha</th>                                 
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                for($i = 0; $i<count($json); $i++){
                    ?> 
                      <tr onclick="document.location = '#';">
                    <?php
                    echo '<td class="text-success">'. $json[$i]->getFactura() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getEmpleado() .'</td>';
                    echo '<td class="text-success">'. $json[$i]->getProveedor() .'</td>';
                  
                    echo '<td><a href="Listado_Abonos.php?clave=2&codigo='.$json[$i]->getFactura().'">Abonos</a></td>';
                    
                    echo '<td class="text-success">'. $json[$i]->getTotal() .'</td>';                    
                    echo '<td class="text-success">'. $json[$i]->getFecha() .'</td>';                                       
                    ?> 
                    </tr>;
                <?php    
                   }                
                ?>
                </tbody>
            </table>            
        </div>   
        
          <script>
   
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
        
        <footer>
            
        </footer>
    </body>
</html>


