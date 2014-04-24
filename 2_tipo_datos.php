<?php

//Booleanos
$bool = true;
$bool = false;

//Integer
$int = 0;
$int2 = 3467;
$int3 = -3565;

//Float - Double
$float = 0.02;
$float2 = 3.1416;
$float3 = -5.45;

//String
$cadena = ' Mundo';
$cadena2 = 'Hola'.$cadena;
$cadena3 = "Que paso? $candena";

//Arrays
$array = array($cadena, $bool, $int, 'Mi Mensaje', 0);
echo $array[4];
/*
Array Associative or Map
$myArray = array(key => value);
*/
$associative = array(
  'nombre' 		=> 'Alejandro',
  'apellido' 	=> 'Acosta',
  'edad' 		=> 15,
  'ciudad' 		=> 'TJ'
);
echo $associative['edad'];

//Objects
class Alumno{  
}
$alex = new Person;
print $alex;

//NULL
$nulo = NULL;

//Callback()
function miFunction(){
  	call_user_func('miFuncion'); 	
}

///manipulacion de tipos de datos
echo (int2 + int3 + float * 2) / 3;
echo $cadena . ' ' . $cadena2;