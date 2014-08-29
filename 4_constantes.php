<?php

//variable
$variable = 5;

//Constant
define("PI", 3.1416);
define("FUNCTION", 'un valor');

echo PI . '<br />';


echo __FILE__  . '<br />';

//Constates en Clases y Objetos
class Geometria{
  //Define constante en clases
  	const PI = 3.1416;
  	
    function mostrarPi(){
        return self::PI;
    }
}

$circulo = new Geometria();
echo $circulo->mostrarPi();

echo '<br />';

$e = 5;

$f = $e += 10;
echo "e = $e. f = $f";