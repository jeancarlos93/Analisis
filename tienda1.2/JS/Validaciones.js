/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " Ã¡Ã©Ã­Ã³ÃºabcdefghijklmnÃ±opqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    
function validar_cedula(id){
    
  valor1 = document.getElementById("cedula").value;
    if( !(/^\d{9}$/.test(valor1)) || (isNaN(valor1))) {
       document.getElementById("error_"+id).innerHTML = "";     
    return false;
    }
    else{
      document.getElementById("error_"+id).innerHTML = "Correo Invalido"; 
      return true; 
  } 
}    
    
function SoloNumeros(evt){
 if(window.event){//asignamos el valor de la tecla a keynum
  keynum = evt.keyCode; //IE
 }
 else{
  keynum = evt.which; //FF
 } 
 //comprobamos si se encuentra en el rango numÃ©rico y que teclas no recibirÃ¡.
 if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
  return true;
 }
 else{
  return false;
 }
}


function validarCorreo(){
    valor = document.getElementById("correo").value;
    if( !(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test(valor)) ) {
    return false;
    }
}

var bloquear = true;
function validar_numero(numero, id){
    
    $(document).ready(function (){
          $('#'+id).keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
        });
}

function validar_letras(texto, id){
    
    
   $(document).ready(function (){
          $('#'+id).keyup(function (){
            this.value = (this.value + '').replace(/[^a-zA-Z]/g, '');
          });
        });
}

function validar_password(texto, name){
    
    if (document.getElementById("password").value !== texto){
        
	document.getElementById("error_"+name).innerHTML = "Confirmacion de contraseÃ±a incorrecta<br>";
        return true;
    }
    else{
        document.getElementById("error_"+name).innerHTML = "";
        return false;
    }
}

function validar_correo(texto, id){
  
  var formato = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  if(formato.test(texto)){
    document.getElementById("error_"+id).innerHTML = "";     
    return false;
  }
  else{
      
      document.getElementById("error_"+id).innerHTML = "Correo Invalido"; 
      return true; 
  } 
}

function validar_envio(){
    
    var dato = document.getElementById("correo").value;
    var formato = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    dato = document.getElementById("confirmarPassword").value;
    if(formato.test(document.getElementById("correo").value)){
        
        if(txt.equals(document.getElementById("confirmarPassword").value)){
            
            return false;
        }
        else{
            return false;
        }
    } 
    else{
        alert("else{}");
        return false;
    }
}
