<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" rel="stylesheet"/>     
        <script src="../JS/Validaciones.js" type="text/javascript"> </script>
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
        
        <?php
        include_once '../Data/DataCargarListas.php';
        include_once '../Domain/Producto.php';
        ?>

        
                
      <script> 
            $(function(){ 
                $("#header").load("../View/Header.php");
            });
      </script> 
      
      <script>
      $(document).ready(function($){
          
           $('#telefono').mask("9999 9999",{placeholder: "____-____"});
      
          $('#cedula').mask("9 9999 9999",{placeholder: "_-____-____"});

          $('#precioUnitario').mask("99999999",{placeholder: "â‚¡        "});
          
          $('#precioVenta').mask("99999999",{placeholder: "â‚¡           "});
          
      });
      
      </script>      
    </head>

    <body>
        <div id="header"></div>
    <center><h1 class="tituloRegistros"> Datos de Producto</h1></center>

        <?php
        $codigo = $_GET['codigoProducto'];
        $producto = getObtenerProducto($codigo);
        
        $marcas = getObtenerMarcas();
        $categoria = getObtenerCategorias();
        ?>

    <div class="iconoRegistro"><img src="../Image/productos.png" ></div>
    
        <div class="registrar">
            <form class="form" method="post" action="../Business/producto/ModificarProducto.php" accept-charset="UTF-8" >

                <input title="Es necesario su nombre" type="hidden" name="codigo" id="name" value="<?php echo $codigo ?>"/>

                <label for="nombre">Descripcion:</label>
                <input title="Es necesario su nombre" type="text" name="descripcion" id="name" value="<?php echo $producto->getDescripcion() ?>" required/>
                <br><br>
                <label for="apellido">Precio Unitario:</label>
                <input type="text" id="precioUnitario" name="precioUnitario"  value="<?php echo $producto->getPrecioUnitario() ?>"onkeyup="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required required/>
                <br><br>
                <label for="Correo">Precio Venta:</label>
                <input type="text" id="precioVenta" name="precioVenta" value="<?php echo $producto->getPrecioVenta() ?>" onkeyup="validar_cedula(this.value,this.id)"  onkeypress="return SoloNumeros(event)" required />
                <br><br>                
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
    </footer>    
</html>
