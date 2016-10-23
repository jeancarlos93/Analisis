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

            function colocar(id, categoria) {
                $("#trr").val(categoria);
                $("#idtrr").val(id);
                alert("se seleccionó la categoría: " + categoria);
                cerrarVentana();
            }
        </script>

    </head>

    <body>          
        <div class="ventanamodal">
            <div class="form">
                <div id="vm_encabazado" style="width: 556px; height: 50px;">
                    Categorias:
                    <div class="cerrar"><a href="javascript: cerrarVentana();"><FONT COLOR="#00ff00">X</FONT></a></div>
                </div>
                <div id="vm_contenido" style="overflow: auto; height: 500px;">
                    <form id="formModificar" method="get" action="">

                        <input type="hidden" id="cod" value=""  name="codigo"/>
                        <?php
                        for ($i = 0; $i < count($categoria); $i++) {
                            echo '<div class="opcioncat" id="' . $categoria[$i]->getId() . '" onclick="javascript:colocar(' . $categoria[$i]->getId() . ' ,\'' . $categoria[$i]->getCategoria() . '\' );">' . $categoria[$i]->getCategoria() . '</div>';
                        }
                        ?>
                        
                    </form>
                </div>
                <?php
                        
                        echo '              <td><a href="Registrar_Categoria.php?">Nueva</a></td>';
                        ?>
            </div>
        </div>
    </body>



