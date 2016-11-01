<?php
include 'Data/PruebaUnitariaData.php';
include_once 'Domain/Producto.php';
require_once 'PHPUnit/Autoload.php';

class PruebaUnitaria extends \PHPUnit_Framework_TestCase {

       public function testParaProbarQueTrueEsTrue(){
        $variableTrue = true;
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


        $this->assertTrue($variableTrue);
    }
}



?>
