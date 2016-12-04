


/*Funciones para aplicar en la factura onChange="calculo(this.value,precioperas.value,totalperas,total);" */

/* Funcion que se encarga de seleccionarme al cliente*/

var cantidades = [];
var codigos = [];
/*
function colocar(cedula, nombre, apellido) {
    $("#cliCedula").val(cedula);
    $("#clinombre").val(nombre + '  ' + apellido);
    $("#cliapellido").val(apellido);
    alert("Se seleccionó la categoría: " + nombre);
    alert("Se seleccionó la categoría: " + cedula);
    cerrarVentana();

}
*/

/*function buscarPorCodigo() {

   document.getElementById(codProducto).onkeypress = function (e) {

    var codigo = document.getElementById(codProducto).value;

    
        if (!e)
            e = window.event;
        var keyCode = e.keyCode || e.which;
        if (keyCode == '13') {
          
           for (var i = 0; i < tamanio; i++) {
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
           
            return false;
        }

    }
*/

    /* Funcion que se encarga de crearme los espacios de la tabla y llamar a las funciones que modifican la factura*/
   /* function colocar2(codigo, nombre, precio) {

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
     /*   celdaDescuento.onkeypress = function (e) {
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

    /*fUNCION QUE ME LIMPIA UNA CELDA CUANDO QUIERP CAMBIAR EL RESULTADO del subtotal linea
    function limpiarEspacio(codigo) {
        var tamanio = document.getElementById('td').rows.length;
        for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
          /*  if (parseInt(codigo) == parseInt(document.getElementById('td').rows[i].cells[0].innerText)) {
                $(document.getElementById('td').rows[i].cells[3].innerHTML = '');
            }
        }
    }*/

    /* coloca el subtotal de la factura*/
   /* function subtotal(precio) {
        var espacioSubtotal = document.getElementById('subt').value;
        espacioSubtotal = parseFloat(precio) + parseFloat(espacioSubtotal);
        document.getElementById('subt').value = espacioSubtotal;
    }*/

    /*function subtotal2() {
        var espacioSubtotal = document.getElementById('subt').value;
        var subt = 0;
        var tamanio = document.getElementById('td').rows.length;

        // cantidades=new array();
        var inputCantidad = document.getElementById('cantProdH');

        for (var i = 0; i < tamanio; i++) {/*td es el id de la tabla*/
           /* subt = parseInt(subt) + parseInt(document.getElementById('td').rows[i].cells[3].innerText);
            document.getElementById('subt').value = subt;
            listaCantidades();
            //cantidades[i]= document.getElementsByClassName('cantFact')[i].value;
            //inputCantidad.value=cantidades;
        }
    }*/

    /* Resta el descuento en el subtotal
    function restarDescuento(monto) {
        var espacioSubtotal = document.getElementById('subt').value;
        espacioSubtotal = parseFloat(espacioSubtotal) - parseFloat(monto);
        document.getElementById('subt').value = espacioSubtotal;
    }*/

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
    function facturar() {}

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


