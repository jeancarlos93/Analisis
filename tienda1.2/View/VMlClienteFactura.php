<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/ventanaModal.css" rel="stylesheet" type="text/css"/> 
       
        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/Cliente.php';
        include_once '../Data/DataCliente.php';
        ?>
        <?php
        
        $clientes = getCliente();
        ?>

    </head>

    <body>          
        <div class="ventanamodal">
            <div class="form">
                <div id="vm_encabazado" style="width: 556px; height: 50px;">
                    Clientes:
                    <div class="cerrar"><a href="javascript: cerrarVentana();"><FONT COLOR="#00ff00">X</FONT></a></div>
                </div>
                <div id="vm_contenido" style="overflow: auto; height: 500px;">
                  

                        <input type="hidden" id="cod" value=""  name="codigo"/>
                       
                        <div class="opcioncat">Buscar:                      
                            <input type="text" id="yos" value="" onkeyup="lista_Clientes(this.value);" name="yos" required/></div>
                        <div class="opcioncat" style="font: 170% sans-serif;" id="vlistaClientes"></div> 


 <?php
                       // for ($i = 0; $i < count($clientes); $i++) {
                         //   echo '<div class="opcioncat" id="' . $clientes[$i]->getCodigo() . '" onclick="javascript:colocar(' . $clientes[$i]->getCodigo() . ' ,\'' . $clientes[$i]->getNombre() . '\',\'' . $clientes[$i]->getApellido() . '\' );">' . $clientes[$i]->getCedula() . ',   ' . $clientes[$i]->getNombre() . '  ' . $clientes[$i]->getApellido() . '</div>';
                        //}
                        ?>
                   
                </div>
            </div>
        </div>
    </body>

