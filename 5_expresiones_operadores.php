<?php

//++++++++++++++++++++++++++++  Expresiones  ++++++++++++++++++++++++++++++++

function doble($i)
{
    return $i*2;
}
$b = $a = 5;        

$c = $a++;     

$e = $d = ++$b;    

$f = doble($d++);  

$g = doble(++$e);  

$h = $g += 10;

$i = $a + $b - $c * $d / $e;

//Ecuacion lineal simple
$c = $a + $b;

//++++++++++++++++++++++++++++   Operadores    +++++++++++++++++++++++++++++++

//---------Aritmeticos-------

$a = 10;
$b = 20;

//Negacion
echo -$a + 5 . '<br />'; // -10 + 5 o 5 - 10 = -5

//Suma o Adicion
echo $a + $b + 2 . '<br />'; // 10 + 20 + 2 = 32

//Resta
echo $a - $b . '<br />';

//Multiplicacion;
echo $a * $b . '<br />';

//Division
echo $b / $a . '<br />';

//Modulo
echo ($a + 15) % $b . '<br />'; // 25 % 20 = 1 => |5|

echo '<br /><br />';
//-------------Asignacion---------

$x = 2;
$x = $x + 5; // $x = 2 + 5 = 7
//Mejorado
$x += 5;

$saludo = 'Hola';
$saludo = $saludo . ' Mundo!'; // 'Hola Mundo!'
//Mejorado
$saludo .= ' Mundo!'; // 'Hola Mundo!'

//asignacion por referencia
$x = 10;
$y = &$x;

echo $y . '<br />'; // 10
echo $x . '<br />'; // 10

$x = 15;
echo $y . '<br />'; //15

$y = 20;
echo $x . '<br />'; //20 

echo '<br /><br />';
//------------- Boolean (TRUE TABLES) ----------------

$x = true;
$y = true;
$z = false;

//Negacion
echo (!$x) . '<br />'; // false

//AND (y)
echo ($x && $y) . '<br />'; //true

//OR (o)
echo ($x || $y) . '<br />';

//Compuestos
echo (!$y && $z || $x) . '<br />'; //true


echo '<br /><br />';
//-----------Comparacion --------------

//Igual
echo (5 == 5); // true

//Diferente
echo (5 != 5); // false
echo (5 <> 10); //true

//Identico
$a = 1;
$b = '1';
echo ($a == $b); //true
echo ($a === $b); //false

//No identico
echo ($a !== $b); //false

//Menor que
echo (10 < 2); //false

//Menor igual
echo (2 <= 4); //true

//Mayor que
echo (10 > 2); //true

//Mayor igual
echo (10 >= 2); //true

echo '<br /><br />';
//---------------Control de errores--------------

//$resultado = (5 / 0); //Error Fatal -> No puede dividir entre CERO

echo $resultado = @(5 / 0);


//************************************ Estructuras de Constrol IF/ELSEIF/ELSE - Switch ********************************

/// if
$a = 2;
$b = 5;

if ($a > $b){
    echo 'a es mayor que b';
}

//else
if ($a > $b){
    echo 'a es mayor que b';
}
else{
    echo 'a no es mayor que b';
}

//elseif
if($a > $b){
    echo 'a es mayor que b';
}
elseif ($a == $b){
    echo 'a es igual que b';
}
else{
    echo 'a no es mayor que b';
}

//Switch

$diaSemana = 1;

switch($diaSemana){
    case 1:
        echo 'Domingo';
        break;
    case 2:
        echo 'Lunes';
        break;
    case 3:
        echo 'Martes';
        break;
    case 4:
        echo 'Miercoles';
        break;
    case 5:
        echo 'Jueves';
        break;
    case 6:
        echo 'Viernes';
        break;
    case 7:
        echo 'Sabado';
        break;
    default:
        echo 'No existe ese dia';
        break;
}

