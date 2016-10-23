

<HTML>
    <HEAD>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script> 
        <link href="../css/formularios.css" type="text/css" rel="stylesheet"/>
        <script src="../JS/maskedInput.js" type="text/javascript"></script>
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        
        <link rel="stylesheet" href="alertify.min.css" />
        <link rel="stylesheet" href="themes/default.min.css" />
        <script src="../JS/mensajes.js" type="text/javascript"></script>
        <script type="text/javascript" src="../JS/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css/alertify.default.css" />
        
        <script>
            $(function () {
                $("#header").load("../View/Header.php");
            });
        </script> 

        <script>
            $(document).ready(function ($) {
                $('#telefono').mask("9999 9999", {placeholder: "____-____"});
                $('#cedula').mask("9 0999 0999", {placeholder: "_-____-____"});
            });

        </script> 

    </script>

</HEAD>
<body>
    <div id="header"></div>
    <br><br><br><br>
<center><h1 class="tituloRegistros"> Registrar Clientes</h1></CENTER>

<div class="iconoRegistro"><img src="../Image/clientes.png" ></div>

<div class="registrar">
    <form class="form" method="post" action="../Business/RegistrarCliente.php" accept-charset="UTF-8" >

        <label for="nombre">Nombre:</label>
        <input type="text" id="name" name="nombre" onkeyup=" validar_letras(this.value, this.id)" onchange="validar_letras(this.value, this.id)" onkeypress="return soloLetras(event)" required/>
        <label class="error" for="name" id="name_error"></label><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="name" name="apellido" onkeyup=" validar_letras(this.value, this.id)" onchange="validar_letras(this.value, this.id)" onkeypress="return soloLetras(event)" required/>
        <label class="error" for="name" id="name_error"></label><br><br>

        <label for="cedula">Cédula</label>
        <input type="text" id="cedula" name="cedula" min="7" maxlength="9"  onkeyup="validar_cedula(this.value, this.id)" onchange="validar_cedula(this.value, this.id)"  onkeypress="return SoloNumeros(event)" />
        <label class="error" for="name" id="name_error"></label><br><br>  

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" min="8" maxlength="8" />
        <label class="error" for="name" id="name_error"></label><br><br>

        <button class="submit" type="submit" onclick="return notificarInsertado()">Registrar</button>
    </form>


    <script>
        function notificarInsertado() {
            alert("Cliente insertado");
        }
    </script>
    <script>
        function alerta() {
            //un alert
            alertify.alert("<b>Mensaje</b> Se insertó con éxito", function () {
                
            });
        }
    </script>

</div> 
</body>
</HTML>

