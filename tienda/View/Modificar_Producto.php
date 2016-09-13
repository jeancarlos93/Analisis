<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" rel="stylesheet"/>     

        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        ?>

        <script>
            $(function () {
                $("#header").load("../View/Header.php");
            });
        </script>      
    </head>

    <body>
        <div id="header"></div>
        <h1> Datos de Producto</h1>

        <?php
        $codigo = $_GET['codigoProducto'];
        $producto = getObtenerProducto($codigo);
        //echo $producto[0]->getPrecioVenta();
        $marcas = getObtenerMarcas();
        $categoria = getObtenerCategorias();
        ?>

        <div id="registrar proveedor">
            <form class="form" method="post" action="../Business/producto/ModificarProducto.php" accept-charset="UTF-8" >

                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $codigo ?>"/>

                <label for="nombre">Descripcion:</label>
                <input title="Es necesario su nombre" type="text" name="descripcion" id="name" value="<?php echo $producto->getDescripcion() ?>" required/>
                <label class="error" for="name" id="name_error">Debe introducir su nombre.</label><br><br>

                <label for="apellido">Precio Unitario:</label>
                <input type="text" id="name" name="precioUnitario"  value="<?php echo $producto->getPrecioUnitario() ?>" required/>
                <label class="error" for="name" id="name_error">Debe introducir su apellido.</label><br><br>

                <label for="Correo">Precio Venta:</label>
                <input type="text" id="name" name="precioVenta" value="<?php echo $producto->getPrecioVenta() ?>" />
                <label class="error" for="name" id="name_error">Debe introducir su Correo.</label><br><br>

                <label for="Categoría">Categoría:</label>
                <select name="categoria">
                    <?php
                    for ($i = 0; $i < count($categoria); $i++) {
                        if ($categoria[$i]->getId() == $producto->getCategoria()) {
                            echo '<option value="' . $categoria[$i]->getId() . ' " selected>' . $categoria[$i]->getCategoria() . '</option>';
                        } else {
                            echo '<option value="' . $categoria[$i]->getId() . '">' . $categoria[$i]->getCategoria() . '</option>';
                        }
                    }
                    ?>
                </select><br><br>

                <label for="Marcas">Marca:</label>
                <select name="marcas">                   
                    <?php
                    for ($i = 0; $i < count($marcas); $i++) {
                        if ($marcas[$i]->getId() == $producto->getMarca()) {
                            echo '<option value="' . $marcas[$i]->getId() . '" selected>' . $marcas[$i]->getMarca() . '</option>';
                        } else {
                            echo '<option value="' . $marcas[$i]->getId() . '">' . $marcas[$i]->getMarca() . '</option>';
                        }
                    }
                    ?>
                </select><br><br>

                <button class="submit" type="submit">Modificar</button>

            </form>
        </div>        
    </body>

    <footer>
        <p>footer</p>
    </footer>    
</html>
