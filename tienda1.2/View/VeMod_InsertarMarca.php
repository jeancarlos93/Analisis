<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/ventanaModal.css" rel="stylesheet" type="text/css"/> 

        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/marcaProducto.php';
        include_once '../Domain/CategoriaProducto.php';
        ?>

        <?php
        $marcas = getObtenerMarcas();
        $categoria = getObtenerCategorias();
        ?>

        <script>

            function colocarMarca(id, marca) {
                $("#marcaSelec").val(marca);
                $("#idmarcaSelec").val(id);
                // $("#nombreGrupo").val(nombre);
                alert("Se seleccionó la categoría: " + marca);
                cerrarVentanaMarca();
            }
        </script>

    </head>

    <body>          
        <div class="ventanamodalMarca">
            <div class="form">
                <div id="vm_encabazado" style="width: 556px; height: 50px;">
                    Marcar:
                    <div class="cerrar"><a href="javascript: cerrarVentanaMarca();"><FONT COLOR="#00ff00">X</FONT></a></div>
                </div>
                <div id="vm_contenido" style="overflow: auto; height: 500px;">
                    <form id="formModificar" method="get" action="">
                        <?php
                        for ($i = 0; $i < count($marcas); $i++) {

                            echo '<div class="opcioncat" id="' . $marcas[$i]->getId() . '" onclick="javascript:colocarMarca(' . $marcas[$i]->getId() . ' ,\'' . $marcas[$i]->getMarca() . '\' );">' . $marcas[$i]->getMarca() . '</div>';
                        }
                        ?>
                    </form>
                </div>
                        <?php
                        echo '<a href="Registrar_marca.php?">Nueva</a>                       ';
                        ?>
            </div>
        </div>
    </body>