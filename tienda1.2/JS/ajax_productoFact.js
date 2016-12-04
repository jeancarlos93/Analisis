
/*****************************Método para la búsqueda de clientes**********************************/

function lista_Clientes(valor) {
    $.ajax({
        url: '../Business/BusquedaClieFactura.php',
        type: 'POST',
        data: 'valor=' + valor
    }).done(function (resp) {
        var valores = eval(resp);
        html = "<table class='opcioncat'><thead><tr><th>#</th><th>Cédula</th><th>Nombre</th><th>Apellido</th><th>Selec</th></tr></thead><tbody>";
        for (i = 0; i < valores.length; i++) {
            html += "<tr><td>" + (i + 1) + "</td><td>" + valores[i].cedula + "</td><td>" + valores[i].nombre + "</td><td>" + valores[i].apellido + "</td><td> <div onclick=\"colocar(" + valores[i].cedula + ",'" + valores[i].nombre + "','" + valores[i].apellido + "')\";>Agregar</div></td></tr>";
        }
        html += "</tbody></table>";
        $("#vlistaClientes").html(html);
    });
}
/*****************************Método para la búsqueda de Productos**********************************/

function lista_libros(valor) {
    $.ajax({
        url: '../Business/BusquedaProdFactura.php',
        type: 'POST',
        data: 'valor=' + valor
    }).done(function (resp) {
        var valores = eval(resp);
        html = "<table class='opcioncat'><thead><tr><th>#</th><th>Codigo</th><th>Descripcion</th><th>precio</th><th>Selec</th></tr></thead><tbody>";
        for (i = 0; i < valores.length; i++) {
            html += "<tr><td>" + (i + 1) + "</td><td>" + valores[i].id + "</td><td>" + valores[i].descripcion + "</td><td>" + valores[i].precioVenta + "</td><td> <div onclick=\"colocar2(" + valores[i].id + ",'" + valores[i].descripcion + "'," + valores[i].precioVenta + ")\";>Agregar</div></td></tr>";
        }
        html += "</tbody></table>";
        $("#vlista").html(html);
    });
}



/*******************************Metodo que me agrega los productos por código a la tabla****************************/

$('#agregarProducto').click(function () {
    var nombre = $("#codProducto").val();
    if (nombre == "") {
        //alertify.error('Debe Introducir un Nombre');
        alert('Debe introducir un codigo')
        $("input").focus();
        return false;
    }
    $.ajax({
        type: "POST",
        url: "../business/consultarProductoFactura.php",
        data: 'codProducto=' + nombre
    }).done(function (resp) {
        var valores = eval(resp);
        alert(valores[0].id)
        document.getElementById("codProducto").value = "";
        colocar2(valores[0].id, valores[0].descripcion, valores[0].precioVenta)
    });

    return false; //Agregamos el Return para que no Recargue la Pagina al Enviar el Formulario  
});

/***********Metodo que detecta el enter a la hora de buscar un producto por código y agregarlo a la tabla***************/
document.getElementById('codProducto').onkeypress = function (e) {
    if (!e)
        e = window.event;
    var keyCode = e.keyCode || e.which;
    if (keyCode == '13') {
        var nombre = $("#codProducto").val();

        if (nombre == "") {
            alert('Debe introducir un codigo')
            $("input").focus();
            return false;
        }
        $.ajax({
            type: "POST",
            url: "../business/consultarProductoFactura.php",
            data: 'codProducto=' + nombre

        }).done(function (resp) {
            document.getElementById("codProducto").value = "";
            var valores = eval(resp);
            colocar2(valores[0].id, valores[0].descripcion, valores[0].precioVenta);
        });
        return false;
    }
}

/*Funciones para aplicar en la factura onChange="calculo(this.value,precioperas.value,totalperas,total);" */



var cantidades = [];
var codigos = [];

/* Funcion que se encarga de seleccionarme al cliente*/
function colocar(cedula, nombre, apellido) {
    $("#cliCedula").val(cedula);
    $("#clinombre").val(nombre + '  ' + apellido);
    $("#cliapellido").val(apellido);
    
    cerrarVentana();

}

document.getElementById('descuentoGeneral').onkeypress = function (e) {
    if (!e)
        e = window.event;
    var keyCode = e.keyCode || e.which;
    if (keyCode == '13') {
        var espacioTotal = document.getElementById('total').value;
        document.getElementById('total').value = parseFloat(document.getElementById('subt').value) - ((parseFloat(document.getElementById('subt').value) * parseFloat(document.getElementById('descuentoGeneral').value)) / 100);
        return false;
    }
}



/* Funcion que se encarga de crearme los espacios de la tabla y llamar a las funciones que modifican la factura*/
function colocar2(codigo, nombre, precio) {

    var table = document.getElementById('td');
    var hilera = document.createElement("tr");

    var cantidad = cantidadProducto(codigo);// me trae la cantidad del producto
    var precios = recorrerTabla(codigo, precio);//me obtiene el resultado de la formula  total

    var celdaCodigo = document.createElement("td");
    var textoCelda1 = document.createTextNode(codigo);
    celdaCodigo.appendChild(textoCelda1);
    hilera.appendChild(celdaCodigo);

    var celdaNombre = document.createElement("td");
    var textoCelda2 = document.createTextNode(nombre);
    celdaNombre.appendChild(textoCelda2);
    hilera.appendChild(celdaNombre);

    var celdaCantidad = document.createElement("input");
    var textoCelda = document.createTextNode(celdaCantidad.value = '' + cantidad + '');
    // celdaCantidad.id='cantProd';
    celdaCantidad.appendChild(textoCelda);
    hilera.appendChild(celdaCantidad);
    celdaCantidad.className = 'cantFact';
    celdaCantidad.onkeypress = function (e) {
        if (!e)
            e = window.event;
        var keyCode = e.keyCode || e.which;
        if (keyCode == '13') {
            precios = parseInt((celdaPrecio.innerText) * (parseInt(celdaCantidad.value)) - (parseInt(celdaDescuento.value) * (parseInt(celdaCantidad.value) * parseInt(celdaPrecio.innerText)) / 100));
            limpiarEspacio(celdaCodigo.innerText);
            celdaSubtotalLinea.appendChild(document.createTextNode(precios));
            restarDescuento(parseInt(celdaPrecio.innerText) - precios);
            subtotal2();
            return false;
        }
    }

    var celdaPrecio = document.createElement("td");
    var textoCelda3 = document.createTextNode(precio);
    celdaPrecio.appendChild(textoCelda3);
    hilera.appendChild(celdaPrecio);

    var celdaDescuento = document.createElement("input");
    var textoCelda = document.createTextNode(celdaDescuento.value = '0');
    celdaDescuento.className = 'descProd';
    /*aqui esta la funcion para el evento enter que me efectua el descuento*/
    celdaDescuento.onkeypress = function (e) {
        if (!e)
            e = window.event;
        var keyCode = e.keyCode || e.which;
        if (keyCode == '13') {
            alert('hola' + celdaCodigo.innerText);
            precios = parseInt((celdaPrecio.innerText) * (parseInt(celdaCantidad.value)) - (parseInt(celdaDescuento.value) * (parseInt(celdaCantidad.value) * parseInt(celdaPrecio.innerText)) / 100));
            limpiarEspacio(celdaCodigo.innerText);
            celdaSubtotalLinea.appendChild(document.createTextNode(precios));
            restarDescuento(parseInt((parseInt(celdaDescuento.value) * (parseInt(celdaCantidad.value) * parseInt(celdaPrecio.innerText)) / 100)));
            //   alert('hola' + (parseInt(celdaPrecio.innerText) - precios));
            subtotal2();
            return false;
        }
    }

    celdaCantidad.appendChild(textoCelda);
    hilera.appendChild(celdaDescuento);
    // agrega la hilera al final de la tabla (al final del elemento tblbody)
    var celdaSubtotalLinea = document.createElement("td");
    var textoCelda4 = document.createTextNode(precios);
    celdaSubtotalLinea.appendChild(textoCelda4);
    hilera.appendChild(celdaSubtotalLinea);

    table.appendChild(hilera);
    // subtotal(precios);
    subtotal2();
    cerrarVentanaProductos();
}

/*************fUNCION QUE ME LIMPIA UNA CELDA CUANDO QUIERP CAMBIAR EL RESULTADO del subtotal linea*****************/
function limpiarEspacio(codigo) {
    var tamanio = document.getElementById('td').rows.length;
    for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
        if (parseInt(codigo) == parseInt(document.getElementById('td').rows[i].cells[0].innerText)) {
            $(document.getElementById('td').rows[i].cells[3].innerHTML = '');
        }
    }
}

/************************************ coloca el subtotal de la factura ********************************************/
function subtotal(precio) {
    var espacioSubtotal = document.getElementById('subt').value;
    espacioSubtotal = parseFloat(precio) + parseFloat(espacioSubtotal);
    totalConDescuento(espacioSubtotal);
    document.getElementById('subt').value = espacioSubtotal;
    totalConDescuento(espacioSubtotal);
}

function totalConDescuento(subTotal) {
    var espacioTotal = document.getElementById('total').value;
    document.getElementById('total').value = parseFloat(document.getElementById('subt').value) - ((parseFloat(document.getElementById('subt').value) * parseFloat(document.getElementById('descuentoGeneral').value)) / 100);
    document.getElementById('pagoFinal').value = parseFloat(document.getElementById('subt').value) - ((parseFloat(document.getElementById('subt').value) * parseFloat(document.getElementById('descuentoGeneral').value)) / 100);
}


function subtotal2() {
    
    var espacioSubtotal = document.getElementById('subt').value;
    var subt = 0;
    var tamanio = document.getElementById('td').rows.length;

    var inputCantidad = document.getElementById('cantProdH');

    for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
        subt = parseInt(subt) + parseInt(document.getElementById('td').rows[i].cells[3].innerText);
        document.getElementById('subt').value = subt;
        totalConDescuento(subt);
        listaCantidades();
        //cantidades[i]= document.getElementsByClassName('cantFact')[i].value;
        //inputCantidad.value=cantidades;
    }
}

/* Resta el descuento en el subtotal*/
function restarDescuento(monto) {
    var espacioSubtotal = document.getElementById('subt').value;
    espacioSubtotal = parseFloat(espacioSubtotal) - parseFloat(monto);
    document.getElementById('subt').value = espacioSubtotal;
    totalConDescuento(espacioSubtotal);
}

/* Tabla que me obtiene el subtotal de linea*/
function recorrerTabla(codigo, precio) {
    var tamanio = document.getElementById('td').rows.length;

    if (document.getElementById('td').rows.length > 0) {
        for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
            if (parseInt(codigo) == parseInt(document.getElementById('td').rows[i].cells[0].innerText)) {
                var porClassName = parseInt(document.getElementsByClassName('cantFact')[i].value) + 1;
                document.getElementsByClassName('cantFact')[i].innerHTML = porClassName; // este me modifica la cnatidad

                var totalL = document.getElementById('td').rows[i].cells[3].innerText;
                precio = parseInt(precio) + parseInt(totalL);
                $(document.getElementById('td').rows[i].remove());
                return precio;
            } else {
                // var porClassName=parseInt(document.getElementsByClassName('cantFact')[i].value)+1;
            }
        }
        return precio;
    } else {
        return precio;
    }
}

function cantidadProducto(codigo) {
    var cantidad;
    var tamanio = document.getElementById('td').rows.length;
    if (document.getElementById('td').rows.length > 0) {
        for (var i = 0; i < tamanio; i++) {
            if (parseInt(codigo) == parseInt(document.getElementById('td').rows[i].cells[0].innerText)) {
                var porClassName = parseInt(document.getElementsByClassName('cantFact')[i].value) + 1;
                return porClassName;
            }
        }
        return 1;
    } else {
        return 1;
    }
}

function descuentoProducto(codigo) {
    var cantidad;
    var tamanio = document.getElementById('td').rows.length;
    if (document.getElementById('td').rows.length > 0) {
        for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
            if (parseInt(codigo) == parseInt(document.getElementById('td').rows[i].cells[0].innerText)) {
                var porClassName = parseInt(document.getElementsByClassName('descProd')[i].value);
                // alert('hola class' + porClassName);
                return cantidad;
            }
        }
        return 0;
    } else {
        alert('No se encontró');
        return 0;
    }
}

/********************** Funciones para recuperar los datos de la tabla *****************************************/

function listaCantidades() {
    var inputCantidad = document.getElementById('cantProdH');
    var inputCodigos = document.getElementById('codigoProdH');

    var tamanio = document.getElementById('td').rows.length;
    for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
        cantidades[i] = document.getElementsByClassName('cantFact')[i].value;
        inputCantidad.value = cantidades;

        codigos[i] = document.getElementById('td').rows[i].cells[0].innerText;
        // alert('este es el codigo del producto' + document.getElementById('td').rows[i].cells[0].innerText);
        inputCodigos.value = codigos;

    }
}




