<?php
session_start();
$cedula;
$cedula = $_SESSION['cedUsuario'];
$vendedor = $_SESSION['usuario'];
?>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="../css/cssFactura.css" rel="stylesheet" type="text/css"/>
        <script src="../JS/ajax_productoFact.js" type="text/javascript"></script>

        <script type="text/javascript" language="javascript" src="../JS/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.css" media="screen" />

        <style>
            table, th, td {
                border: 0.5px solid whitesmoke;
            }
        </style>

        <script>
            $(function () {
                $("#header").load("../View/Header.php");
                $("#vmodalCliente").load("../View/VMlClienteFactura.php");
                $("#vmodalProducto").load("../View/VMProductosFactura.php");

            });
            function abrirVentana() {
                $("#vmodalCliente").load($(".ventanamodal").slideDown("slow"));
            }
            function cerrarVentana() {
                $(".ventanamodal").slideUp("slow");
            }
            function abrirVentanaProductos() {

                $("#vmodalProducto").load($(".ventanamodalProductos").slideDown("slow"));

            }
            function cerrarVentanaProductos() {
                $(".ventanamodalProductos").slideUp("slow");
            }

            $(document).ready(deshabilitarCampoTotalFinal());
            function deshabilitarCampoTotalFinal() {
                alert('hola'+document.getElementById('tipoFac').value);
               

            }
        </script>

        <style>

            BODY {
                font: 10pt Verdana, Geneva, Arial, Helvetica, sans-serif;
                font-weight: bold;
                margin: 0 0 0 0px;
                text-align: center;
                background-color: #ebebeb;
            }
            #contenedor1{
                text-align: left;
                width: 1500px;
                /* margin: auto; */
                /* padding: 6 6 6 10px; */
            }
            #cabecera0{
                margin: 0 0 0 0px;
                background-color: #d0d0ff;
                color: #333300;
                /* font-size:12pt;
                  font-weight: bold; */
                padding: 10 10 10 50px;
                margin-bottom: 10px;


            }
            #cabecera1{
                margin: 160 0 0 -40px;
                /*   background-color: #d0d0ff;*/
                color: #333300;
                font-size:12pt;
                font-weight: bold;
                padding: 10 10 10 50px;
                margin-bottom: 10px;

                background: rgba(255,255,255,1);
                background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
                background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#090000', GradientType=1 );



            }
            #cabecera2{

                /*  background-color: #d0d0ff;*/
                color: #333300;
                font-size:12pt;
                font-weight: bold;
                padding: 3 3 3 10px;

                background: rgba(255,255,255,1);
                background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
                background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#898282', GradientType=1 );
            }
            #cuerpo{
                margin: 10 0 10 0px;
            }
            #lateral{
                margin-left: 50px;
                width: 300px;
                height: 350px;
                /* background-color: #999999;*/
                float:left;
                background: rgba(255,255,255,1);
                background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
                background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#090000', GradientType=1 );
            }

            #otrolado{
                width: 120px;
                float: right;
            }
            #principal{
                margin-left: 100px;
                background-color: #ffffff;
                padding: 4 4 4 4px;
                width: 1000px;
            }
            #pie{
                background-color: #cccccc;
                padding: 3 10 3 10px;
                text-align:right;
                clear: both;
            }

            #derecha{
                margin: 0 0 0 170px;
            }

            #principal{
                background-color: #ffffff;
                padding: 4 4 4 4px;
                width: 1000px;
                height: 350px;
                float: left;
            }
            .f input { height: 25px; width: 220px; padding: 2px 5px; }

            .f input{
                border: 1px solid #aaa; box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
                border-radius: 2px; padding-right: 30px;
                -moz-transition: padding .25s;
                -webkit-transition: padding .25s;
                -o-transition: padding .25s;
                transition: padding .25s;
            }

            .f input:focus {
                background: #fff; border: 1px solid #555;
                box-shadow: 0 0 3px #aaa;
                padding-right: 70px;
            }

            .f input:required {
                background: #fff url(images/red_asterisk.png) no-repeat 98% center;
            }

            .f input:required:valid {
                background: #fff url(images/valid.png) no-repeat 98% center;
                box-shadow: 0 0 5px #5cd053;
                border-color: #28921f;
            }

            .f input:focus:invalid{
                background: #fff url(images/invalid.png) no-repeat 98% center;
                box-shadow: 0 0 5px #d45252;
                border-color: #b03535;
            }

        </style>

        <?php
        include_once '../Data/DataFacturaVenta.php';
        include_once '../Domain/Factura.php';
        ?>

    </head>

    <body>
        <?php $numeroFactura = getNumeroFactura(); ?>

        <div id="contenedor1">

            <div id="header"></div>
            <div id="vmodalCliente"></div>
            <div id="vmodalProducto"></div>

            <form class="f" method="post" action="../Business/insertarFactura.php" accept-charset="UTF-8" >
                <div id="cabecera0"></div>
                <div id="cabecera1">
                    Datos Factura:<br>
                    <label for="numFact">Número factura:</label>
                    <input type="text" id="numFact" value="<?php echo $numeroFactura; ?>" name="numFact" readonly="" required/>

                    <label for="Vendedor">Vendedor:</label>
                    <input type="text" value="<?php echo $vendedor; ?>" id="nombreVendedor" name="nombreVendedor" readonly="" required/>
                    <input type="hidden" value="<?php echo $cedula; ?>" id="cedulaVendedor" name="cedulaVendedor" required/>

                    <label for="Fecha">Forma de Pago:</label>
                    <SELECT NAME="selCombo" SIZE=1>
                        <OPTION VALUE="efectivo">Efectivo</OPTION>
                        <OPTION VALUE="tarjeta">Tarjeta</OPTION>
                    </SELECT>
                    <label for="Fecha">Tipo:</label>
                    <SELECT NAME="tipoFac" SIZE=1>
                        <OPTION VALUE="debito">Débito</OPTION>
                        <OPTION VALUE="credito">Crédito</OPTION>
                    </SELECT>

                </div>

                <div id="cabecera2">
                    Datos del cliente: <br>
                    <label for="Cliente">Nombre:</label>
                    <input type="text" id="clinombre"  name="ClienteNomb" readonly="readonly" required/>
                    <label for="Cliente">Código:</label>
                    <input type="text" id="cliCedula"  name="ClienteCod" readonly="readonly" required/>
                    <a href="#" onclick="javascript:abrirVentana();">Seleccionar Cliente</a>
                    <input type="hidden" id="clicedula" name="idCliente" required/>

                </div>

                <div id="cuerpo">
                    <div id="principal">
                        <div style="float: left;"> <div Style="  float: left;"><label for="producto"> Código Producto:</label>
                                <input type="text" id="codProducto"  value="" name="codproducto" /></div>

                            <div Style=" float: left;
                                 font-family:Verdana,Helvetica;
                                 font-weight:bold;
                                 color:white;
                                 background:#638cb5;
                                 border:0px;
                                 width:90px;
                                 height:26px;" id="agregarProducto">Agregar</div>

                            <input id="codigoProdH" name="codigoProdH" type="hidden" value=""/>
                            <input id="cantProdH" name="cantProH" type="hidden" value=""/>
                            <br>
                        </div>
                        <div style="float: right; margin-right: 10px;"><a href="#" onclick="javascript:abrirVentanaProductos();">Buscar Producto</a></div>

                        <br><br>
                        <div style="float: left; margin-right: 100px; overflow: auto; height: 220px;">
                            <table id="Jtabla" cellpadding="0" cellspacing="0" border="0" class="display" >
                                <thead id="tr">
                                    <tr>
                                        <th class="text-primary">Código</th>
                                        <th class="text-primary">Producto</th>
                                        <th class="text-primary">Cantidad</th>
                                        <th class="text-primary">Precio</th>
                                        <th class="text-primary">Descuento</th>
                                        <th class="text-primary">Subtotal Linea</th>
                                    </tr>
                                </thead>
                                <tbody id="td">
                                </tbody>
                                <tr style="overflow:auto;"></tr>
                            </table>
                        </div>
                    </div>


                    <div id="lateral">

                        <div><label for="subtotal">Subtotal:</label></div>
                        <div>₡ <input value="0" type="text" id="subt" name="subt" style="padding: .2em; " readonly="" required/></div>
                        <br>

                        <div><label for="IVA">IVA:</label></div>
                        <div>₡ <input value="13.0" type="text" id="IVA" name="iva" readonly="" required/></div>
                        <br>

                        <div><label for="Fecha">Descuento:</label></div>
                        <div>₡ <input value="0" type="text" id="descuentoGeneral" name="descuentoGeneral" required/></div>
                        <br>

                        <div><label for="Total">Total:</label></div>
                        <div>₡ <input value="0" type="text" id="total" style="color: blue;" name="total" readonly="" required/></div>
                        <br>

                        <div><label for="pagoFinal">Pago Final:</label></div>
                        <div>₡ <input value="0" type="text" id="pagoFinal" style="color: red;" name="pagoFinal" required /></div>
                        <br>

                        <div style="margin-right:auto; text-align:center; "><button style="font-family:Verdana,Helvetica;
                                                                                    font-weight:bold;
                                                                                    color:white;
                                                                                    background:#638cb5;
                                                                                    border:1px;
                                                                                    width:150px;
                                                                                    height:45px;" type="submit">Facturar</button></div>

                    </div>
                    <div id="pie">
                        © 2005 DesarrolloWeb.com
                    </div>

                </div>
            </form>
        </div>
        <link href="../css/ventanaModal.css" rel="stylesheet" type="text/css"/>

    </body>

</html>