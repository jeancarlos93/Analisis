<?php
include_once '../Data/DataCategoria.php';
$codigo =  $_POST['id'];
$categoria =  $_POST['categoria'];
ModificarCategoria($codigo,$categoria);
?>