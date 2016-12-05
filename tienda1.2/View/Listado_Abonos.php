
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
        <script src="../JS/Autocomplete.js" type="text/javascript"> </script>
       
         <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />

        <?php
        include_once '../Data/DataAbono.php';
        include_once '../Domain/Abono.php';
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
            
            <center><h1 class="h1" id="h1">Listado de Abonos de la factura</h1></center>
            <?php
                $clave = $_GET['clave'];
                $codigoFactura = $_GET['codigo'];
                $json = getAbonos($codigoFactura);
            ?>
         <div class="nuevo">
            <?php                 
                echo '<td><a href="../Business/Abonos.php?clave='.$clave.'&codigoFactura='.$codigoFactura.'">Nuevo Abono</a></td>';
            ?>  
            </div>        
        
        <div class="busqueda">    
            <label align="right" for="kwd_search">Busqueda de abonos:</label> <input type="text" id="kwd_search"/>  
        </div>
                
        <div class="icono"><img src="../Image/proveedor.png" ></div>
            
       <br>
          <table id="Jtabla" cellpadding="0" cellspacing="0" border="0" class="display" >
                <thead>
                    <tr id="tr">
                        <th class="text-primary">Codigo</th>                        
                        <th class="text-primary">Saldo Inicial</th>
                        <th class="text-primary">Abono</th>
                        <th class="text-primary">Saldo final</th>
                        <th class="text-primary">Fecha</th>
                        <th class="text-primary">Modificar</th>
    
                    </tr>
                </thead>
                <tbody id="td">
                <?php
                for($i = 0; $i<count($json); $i++){
                    ?> 
                    <tr onclick="document.location = '#';">
                    <?php
                    echo '<td class="text-success">'. $json[$i]->getCodigo() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getSaldoInicial() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getAbono() .'</td>';                                        
                    echo '<td class="text-success">'. $json[$i]->getSaldoFinal() .'</td>'; 
                    echo '<td class="text-success">'. $json[$i]->getFecha() .'</td>';
                    echo '<td><a href="Modificar_Abono.php?codigoAbono='.$json[$i]->getCodigo().'&codigoFactura='.$codigoFactura.'">'?><img src="../Image/editar.png" width="20px" height="20px"><?php echo'</a></td>';
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


