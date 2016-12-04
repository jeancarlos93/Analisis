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
        <title>Factura</title>
 
        <script>
            $(function () {
                $("#header").load("../View/Header.php");
                

            });
        </script>

         <style>
            BODY { 
                font: 16pt Verdana, Geneva, Arial, Helvetica, sans-serif; 
                margin: 10 0 10 0px; 
                text-align: center; 
                background-color: #ebebeb; 
            } 
            #contenedor{ 
                text-align: left; 
                width: 1500px; 
                margin: auto; 
            } 
            #cabecera{ 

                background-color: #d0d0ff; 
                color: #333300; 
                font-size:12pt; 
                font-weight: bold; 
                padding: 3 3 3 10px; 
                margin-bottom: 10px;


            }
            #cabecera2{ 
                background-color: #d0d0ff; 
                color: #333300; 
                font-size:12pt; 
                font-weight: bold; 
                padding: 3 3 3 10px; 

            } 
            #cuerpo{ 
                margin: 10 0 10 0px; 
            } 
            #lateral{ 
                margin-left: 50px;
                width: 300px; 
                height: 500px;
                background-color: #999999; 
                float:left; 
            } 
            #lateral ul{ 
                margin : 0 0 0 0px; 
                padding: 0 0 0 0px; 
                list-style: none; 
            } 
            #lateral li{ 
                background-color: #ffffcc; 
                margin: 2 2 2 2px; 
                padding: 2 2 2 2px; 
                font-weight: bold; 
            } 
            #lateral a{ 
                color: #3333cc; 
                text-decoration: none; 
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
                height: 500px;
                float: left; 
            }



            .form input { height: 25px; width: 220px; padding: 2px 5px; position: relative} 

            .form input{ 
                border: 1px solid #aaa; box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
                border-radius: 2px; padding-right: 30px;
                -moz-transition: padding .25s;
                -webkit-transition: padding .25s;
                -o-transition: padding .25s;
                transition: padding .25s; 
            }

            .form input:focus { 
                background: #fff; border: 1px solid #555;
                box-shadow: 0 0 3px #aaa; 
                padding-right: 70px;
            }

            form input:required { 
                background: #fff url(images/red_asterisk.png) no-repeat 98% center;
            }

            form input:required:valid { 
                background: #fff url(images/valid.png) no-repeat 98% center;
                box-shadow: 0 0 5px #5cd053;
                border-color: #28921f; 
            }

            form input:focus:invalid{ 
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

        <div id="contenedor">
            <form class="form" method="post" action="../Business/producto/RegistrarProducto.php" accept-charset="UTF-8" >

                <div id="cabecera"> 

                    <label for="numFact">Numero factura:</label>
                    <input type="text" id="numFact" value="" name="numFact" required/>

                    <label for="Vendedor">Vendedor:</label>      
                    <input type="text" value="" id="nombreVendedor" name="nombreVendedor" required/>
                    <input type="text" value="" id="cedulaVendedor" name="cedulaVendedor" required/>
                    <label for="Fecha">Fecha:</label>
                    <input type="date" id="txtfecha" name="txtfecha" class="form-control" value="<?php echo date("Y-n-j"); ?>" required/> 
                    <label for="Fecha">Tipo Factura:</label>
                    <SELECT NAME="selCombo" SIZE=1> 
                        <OPTION VALUE="link pagina 1">Efectivo</OPTION>
                        <OPTION VALUE="link pagina 2">Tarjeta</OPTION>
                    </SELECT>
                    <label for="formaPago">Forma de pago:</label>
                    <SELECT NAME="selCombo" SIZE=1> 
                        <OPTION VALUE="link pagina 1">Efectivo</OPTION>
                        <OPTION VALUE="link pagina 2">Tarjeta</OPTION>
                    </SELECT>

                </div>



                <div id="cabecera2"> 
                    <label for="Cliente">Nombre:</label>
                    <input type="text" id="clinombre"  name="ClienteNomb" readonly="readonly" required/>
                    <label for="Cliente">Código:</label>
                    <input type="text" id="cliCedula"  name="ClienteCod" readonly="readonly" required/>

                    <a href="#" onclick="javascript:abrirVentana();">Seleccionar Cliente</a>
                    <input type="hidden" id="clicedula" name="idCliente" required/>  
                </div>
                <div id="cuerpo"> 
                    <div id="principal"> 
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nulla condimentum commodo orci. Nulla eget purus nec massa 
                        ... 
                    </div>
                    <div id="lateral"> 


                        <div><label for="subtotal">Subtotal:</label></div>
                        <input value="0" type="text" id="subt" name="subt" style="padding: .2em; " required/>

                        <div><label for="Vendedor">Total:</label></div>
                        <div><input value="0" type="text" id="total" name="total" required/></div>

                        <div><label for="Fecha">IVA:</label></div>
                        <div><input value="13.0" type="text" id="IVA" name="iva" required/></div>

                        <div><label for="Fecha">Descuento:</label></div>
                        <div><input value="0" type="text" id="descuentoGeneral" name="descuentoGeneral" required/></div>

                        <div><button type="submit">Facturar</button></div>

                    </div> 
                    <div id="pie"> 
                        © 2005 DesarrolloWeb.com 
                    </div> 

                </div>
            </form>
        </div>

    </body>
</html>
