<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>       
       <style>
            *{
                margin: 0px;
                padding: 0px;
            }

            body{
                width: 100%;
                background: black;
            }
            
            header{
                
                width: 100%;
                position: absolute;
                height: 165px;
                background: -moz-repeating-radial-gradient( #DC143C 0%, #FF69B4 50%,#C71585 80%);/* For Firefox 3.6 to 15 */
                background: -o-repeating-radial-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);
                background: -webkit-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Opera 11.1 to 12.0 */
                background: linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);
                border: 1px solid #000000;
                margin: auto;
                text-align: center;
            }
            
            header h1{
                
                position: absolute;
                left: 310px;
                text-align: center;
                top: 30px;
                font-size: 50px;
                font-weight: bold;
                font-family: "Arial";
                text-shadow: 0 1px 0 #ccc,0 2px 0 #c9c9c9,0 3px 0 #bbb,0 4px 0 #b9b9b9, 0 5px 0 #aaa,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),
                0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);
                color: #eee;
            }
            
            nav{
                position: absolute;
                float: left;
                left: 120px;
                top: 123px;
                padding: 0px;
                background-color:#333;
                text-align: center;
                border: 1px solid #000000;
            }
                
            nav ul {
                list-style-type: none;
                margin: 0px;
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
                font-size: 18px;
                padding: 10px 12px;
                text-decoration: none;
            }

            li a:hover:not(.active) {
                background: -moz-radial-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);/* For Firefox 3.6 to 15 */
                background: -webkit-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Opera 11.1 to 12.0 */
                background: linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);
              
            }

            .active {
                background-color: #EE82EE;
            }
            
                                    
            footer{
                width: 100%;
                position: absolute;
                top: 620px;
                background: -moz-radial-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);/* For Firefox 3.6 to 15 */
                background: -webkit-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%); /* For Opera 11.1 to 12.0 */
                background: linear-gradient(left bottom, circle farthest-side, #DC143C 0%, #FF69B4 50%,#C71585 80%);
              
            }
            
        </style>
   </head>
   <body>
      <header>
            <h1>Sistema de Punto de Venta</h1>
        </header>
        
        <nav>                       
            <ul>
                <li><a href="#">Usuarios</a></li>                   
                <li><a href="#">Proveedor</a></li>
                <li><a href="#">Cliente</a></li>
                <li><a href="#">Productos</a></li>  
                <li><a href="#">Inventario</a></li>  
                <li><a href="#">Apartados</a></li> 
                <li><a href="#">Cuentas por pagar</a></li> 
                <li><a href="#">Ventas</a></li>
                <li><a href="#">Compras</a></li>
                <li><a href="#">Cierre de Caja</a></li>
                <li><a href="/Tienda-vachelle/tienda1.2/View/InicioSesion.php">Iniciar Sesion</a></li> 
            </ul>                         
        </nav>
       </body>  
        
        <footer>
            Pie de la pagina
        </footer>
</html>
