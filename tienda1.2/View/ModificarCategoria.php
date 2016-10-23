
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
<script src="../JS/mensajes.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#header").load("Header.php");
            });
        </script>      
    </head>

    <body>
        <div id="header"></div>
        <br><br><br><br>
    <center><h1 class="tituloRegistros"> Registrar Categorias de Productos</h1></center>
    <?php
    $codigo = $_GET['id'];
    $nombreCategoria = $_GET['categoria'];
    ?>
    <div id="registrar">
        <form class="form" method="post" action="../Business/ModificarCategoria.php" accept-charset="UTF-8" >
            <br><br><br><br><br><br> <br><br><br>
            <input  type="hidden" name="id" id="name" value="<?php echo $codigo; ?>"/>
            <label for="nombre">Categoria:</label>
            <input title="Nueva Categoria" type="text" id="categoria" name="categoria" value="<?php echo $nombreCategoria; ?>" required/>
            <button class="submit" type="submit" class="btn btn-default" onclick="return notificarModificado()">Guardar</button>
        </form>
    </div>        
</body>
</html>
