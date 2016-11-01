<?php

//function getConnection(){

    //$mysqli = new mysqli("localhost", "root", "", "tiendaVachelle");

    //if ($mysqli->connect_error) {
      //  die("Connection failed: " . $mysqli->connect_error);
    //}
  //  return $mysqli;
//}

function getConnection(){

$hostname='68.178.217.13:3306';
$username='ucrgrupo2';
$password='Grupo2uFeR!';
$dbname='ucrgrupo2';

$conex_remota = $mysqli = new mysqli($hostname,$username, $password, $dbname) OR DIE ('No puedo conectarme a la base de datos local! Intentelo nuevamente.');  
$conex_remota;
if ($conex_remota==null) { 
   $conex_remota = $mysqli = new mysqli("localhost", "root", "root", "nuevaBTiendaVachelle") OR DIE ('No puedo conectarme a la base de datos local! Intentelo nuevamente.'); 

}
return $conex_remota;
 }
?>

