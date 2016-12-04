<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../JS/ajax_productoFact.js" type="text/javascript"></script>

        <?php
        include_once '../Data/DataFacturaVenta.php';
        include_once '../Domain/Producto.php';
        ?>

    </head>
    <body>
        
        <div class="ventanamodalProductos">
            <div class="form">
                <div id="vm_encabazado" style="width: 556px; height: 50px;">
                    Producto:
                    <div class="cerrar"><a href="javascript: cerrarVentanaProductos();"><FONT COLOR="#00ff00">X</FONT></a></div>
                </div>
                <div id="vm_contenido" style="overflow: auto; height: 500px;">
                        <input type="hidden" id="cod" value=""  name="codigo"/>
                        <div class="opcioncat">Buscar:                      
                            <input type="text" id="yos" value="" onkeyup="lista_libros(this.value);" name="yos" required/></div>
                        <div class="opcioncat" style="font: 170% sans-serif;" id="vlista"></div> 

                </div>
            </div>
        </div>
    </body>
</html>