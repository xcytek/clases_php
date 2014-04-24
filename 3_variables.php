<?php
//Cast
$elNombreDeVariable = (int)'123456';

var_dump($elNombreDeVariable);
$resultado = 5 + $elNombreDeVariable;

//Variables Predefinidas
$nombre = $_GET['nombre'];
$nombre2 = $_POST['nombre'];

//Ambito de las Variables
$nombre = 'alex';

function leerMiNombre($nombre){  	
  	echo $nombre; 
}

leerMiNombre($nombre);

//Variables variables

$a = 'miVarible';
$$a; //$miVariable