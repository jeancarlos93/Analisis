<?php
include 'simpletest/autorun.php';
include 'PruebaUnitariaData.php';
include_once 'Domain/Producto.php';


class PruebasUnitarias extends UnitTestCase{

function testPruebaUnitaria(){

$producto = new Producto();

$producto->setDescripcion('Pantalon mezclilla niño');
$producto->setPrecioUnitario(10000);
$producto->setPrecioVenta(15000);
$producto->setMarca(1);
$producto->setCategoria(2);

$insert = registrarProducto($producto);

//$holaComoEstas = new HolaComoEstas();
//$numero = $holaComoEstas->tuNumero();

$this->assertTrue($insert);

}


}

?>
