

function buscarProveedor(){  

  xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","../View/ConsultarProveedor.php",true);
  alert("Buen por el metodo");
  xmlhttp.send();          
}

function validacion() {
      var tel = document.getElementById("tel").value;
           
      if(!(/^\d{8}$/.test(tel)) ) {
           alert('ERROR de formato,El campo telefono solo puede llevar 8 digitos numericos');
        return false;  
        
       }
       return true;
} 

 function preguntar(){
         
     if(validacion()){
        if (confirm('Estas seguro de enviar este formulario?')){
             document.datosHotel.submit()
         } 
     }            
 }
 
  function buscarCliente(){  
         var palabraClave = document.getElementById("nombreId").value; 
        if (window.XMLHttpRequest) {
        
            xmlhttp = new XMLHttpRequest();
        } else {
         
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("contenedor").innerHTML = xmlhttp.responseText;    
            }
        };
        xmlhttp.open("GET","../Data/DataCliente.php?palabraClave="+palabraClave+"&opcion=0",true);
         
        xmlhttp.send();      
    }