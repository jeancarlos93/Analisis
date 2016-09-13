<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link  rel="stylesheet"  type="text/css"  href="css/menu.css" >-->
        <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--> 
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
        <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->      
        <!--<link  rel="stylesheet" href="css/menu.css">--> 
        
        <style>
            
            
             .cabecera{
                    background-color: #DDA0DD;
                    /*border: 1px solid black;*/
                    /*background-color: lightblue;*/
                    padding-top: 10px;
                    padding-right: 10px;
                    padding-bottom: 50px;
                    /*padding-left: 0px;*/
                }

                nav h1{
                    background-color: #DDA0DD;
                }

                nav ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333;
                }

                li {
                    float: left;
                }

                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

                li a:hover:not(.active) {
                    background-color: #111;
                }

                .active {
                    background-color: #EE82EE;
                }

    </style>

        <title>Menu</title> 
    </head>
    <body>   

        <nav class="cabecera">
            <center><h1>Tienda Vachelle</h1></center>
        </nav>
        <!--<nav id="header" class="navbar navbar-default navbar-fixed-top">-->
        <nav>                       
            <ul>
                <li><a class="active" href="#">Menu</a></li>
                <li><a href="View/Listado_Usuarios.php">Usuarios</a></li>                   
                <li><a href="View/Listado_Proveedores.php">Proveedor</a></li>
                <li><a href="View/Cliente.php">Cliente</a></li>
                <li><a href="View/Listar_Productos.php">Productos</a></li> 
                <li><a href="#">Inventario</a></li> 
                <li><a href="#">Factura</a></li>
                <li><a href="#">Catalogo de Cuentas</a></li>                   
                <li><a href="#">Iniciar Sesion</a></li>  
            </ul>                         
        </nav>
    </body>  
    </html>

    <?php