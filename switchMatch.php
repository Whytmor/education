<?php 
$a = 3;
if ($a == 1) {
    echo 'сложение';
} elseif ($a == 2) {
    echo 'вычитание';
} elseif ($a == 3) {
    echo 'умножение';
} elseif ($a == 4) {
    echo 'деление';
}

$a = 3;
switch ($a) 
{
    case 1: 
        echo 'сложение';
        break;
    case 2: 
        echo 'вычитание';
    case 3:
        echo 'умножение';
        break;
    case 4: 
        echo 'деление';
        break;
}