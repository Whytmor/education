<?php
$tom = 'Tom';
$sam = $tom;
$sam = 'Sam';
echo "tom = {$tom} <br>"; //tom = tom
echo "sam = {$sam}"; // sam = Sam

$tom = 'Tom';
$sam = &$tom; // передача ссылки
$sam = 'Sam <br>';
echo "tom = {$tom} <br>"; // tom = Sam
echo "sam = {$sam}"; // sam = Sam

//Присвоение ссылки на переменную
$sam = &$tom;
$sam = & $tom;

//Передача по ссылке
function square($a)
{
    $a *= $a;
    echo "a = {$a}";
}
$number = 5;
square($number);
echo "<br /> number = {$number}";





