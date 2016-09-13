
<html>
    <head>
        <meta charset="UTF-8">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../JS/funciones.js"></script>
       
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){
                background-color: #f2f2f2}

            th {
                background-color: #DDA0DD;
                color: black;
            }
        </style>
                
        <?php
        include_once '../Data/DataProvedor.php';
        include_once '../Domain/Proveedor.php';
        ?>
        
        <script> 
            $(function(){  
                $("#header").load("../View/Header.php"); 
            });
        </script>  
        
    </head>
    <body>
        <div id="header"></div>
        <div id="contenedor" class="container">
            
            <center><h1 id="h1">Consulta de proveedores</h1></center>
                     
        </div>   
        
        <footer>
            <div class='define'>
                <p>Contenido del pie de página</p>
            </div>            
        </footer>
    </body>
</html>


