/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function notificarInsertado() {
    alert("Insertado correctamente");
}


function notificarModificado() {
    alert("Cliente ha sido modificado");
}


function confirmaEliminar(){
    if (confirm('¿Esta seguro en eliminar?')){
       return true; 
    } else{
      return false;
    }
}