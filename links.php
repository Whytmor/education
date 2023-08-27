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
// стандартная передача параметров без ссылки
function square($a)
{
    $a *= $a;
    echo "a = {$a}";
}
$number = 5;
square($number);
echo "<br /> number = {$number}";

// Передача параметра по ссылке
function square1(&$a)
{
    $a *= $a;
    echo "a = {$a}"; // a = 25 number = 5
}

$number = 5;
square1($number);
echo "<br /> number = {$number}"; // a = 25 number = 25

//Возвращение ссылки из функции
function &checkName(&$name)
{
    if ($name === 'admin') {
        $name = 'Tom';
    }
    return $name;
}
$userName = 'admin';
$checkedName = &checkName($userName);
echo "<br /> userName: {$userName}";
echo "<br /> checkedName: {$checkedName}";



