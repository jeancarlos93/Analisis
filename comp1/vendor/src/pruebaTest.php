<?php

require_once 'PHPUnit/Autoload.php';

class PruebaUnitaria extends \PHPUnit_Framework_TestCase {

       public function testParaProbarQueTrueEsTrue(){
        $variableTrue = true;
        // primero vamos a ponerlo false para que la prueba falle
        // Probar que $variableTrue sea True de verdad
        $this->assertTrue($variableTrue);
    }
}
?>
