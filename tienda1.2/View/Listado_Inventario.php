<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../JS/Autocomplete.js" type="text/javascript"></script>

        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />
        <link href="../css/tablas.css" type="text/css" rel="stylesheet"/>

        <?php
        include_once '../Data/DataInventario.php';
        include_once '../Domain/Producto.php';
        include_once '../Domain/Inventario.php';
        ?>
        <script>
            $(function () {
                $("#header").load("../View/Header.php");
                inventario();
            });

            function inventario() {

                var valor = document.getElementById("buscarPor").value;
                
                $.ajax({
                    url: '../Business/ConsultarInventario.php',
                    type: 'POST',
                    data: 'buscarPor=' + valor
                }).done(function (resp) {
                    var valores = eval(resp);
                    
                    html = "<table id='Jtabla' cellpadding='0' cellspacing='0' border='0' class='display'><thead><tr id='t'><th class='text-primary'>Descripción</th><th class='text-primary'>Marca</th><th class='text-primary'>Precio</th><th class='text-primary'>Cantidad</th><th class='text-primary'>Categoría</th>><th class='text-primary'>Total</th></tr></thead><tbody id='td'>";
                    for (i = 0; i < valores.length; i++) {
                        html += "<tr><td class='text-success'>" + valores[i].descripcion + "</td><td class='text-success'>" + valores[i].marca + "</td><td class='text-success'>" + valores[i].precio + "</td><td class='text-success'>" + valores[i].cantidad + "</td><td class='text-success'>" + valores[i].categoria + "</td><td class='text-success'>" + valores[i].total + "</td></tr>";
                    }
                    html += "</tbody></table>";
                    $("#tablaBusq").html(html);
                });
            }
        </script>         
        <title></title>

        <script type="text/javascript" src="../JS/funciones.js"></script>

    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            <center><h1 id="h1" class="h1">Inventario</h1></center>

            <div class="selector">

                <select id="buscarPor" name="buscarPor">
                    <option value="1">Entradas</option>
                    <option value="2">Salidas</option> 
                    <option value="3">Inventario</option> 
                    <option value="4"selected >Todo</option>
                </select>
                <button class="submit"  type= "button" onclick="javascript:inventario();">Buscar</button>               
            </div> 

            
            <div id="tablaBusq" style="width: 200px; height: 100px; overflow-y: scroll;"></div>

            <br>
        </div>   

        <script>

            $(document).ready(function () {

                $('#Jtabla').DataTable({
                    columnDefs: [{
                            targets: [0],
                            orderData: [0, 1]

                        }, {
                            targets: [1],
                            orderData: [1, 0]

                        }, {
                            targets: [1],
                            orderData: [1, 0]

                        }]

                });

            });

        </script>
    </body>
    <footer>
        <div class='define'>
            <p>Contenido del pie de página</p>
        </div>            
    </footer>
</html>