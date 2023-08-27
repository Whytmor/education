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
$a = 3;
switch($a) 
{
    case 1: 
        echo 'сложение';
        break;
    case 2: 
        echo 'вычитание';
        break;
    default:
        echo 'Действие по умолчанию';
        break;
}

$a = 3; 
switch($a):

    case 1:
        echo 'сложение';
        break;
    case 2:
        echo 'вычитание';
        break;
    default:
        echo 'действие по умолчанию';
        break;
endswitch;

$a = 2;
switch ($a) 
{
    case 1: 
        $operation = 'сложени';
        break;
    case 2:
        $operation = 'вычитание';
        break;
    default: 
    $operation = 'действие по умолчанию';
    break;
}
echo $operation;

$a = 2; 
$operation = match($a)
{
    1 => 'сложение',
    2 => 'вычитание',
    default => 'действие по умолчанию',

};

$a = 2;
match ($a) 
{
    1 => $operation = 'сложение',
    2 => $operation = 'вычитание',
    default => $operation = 'действие по умолчанию',

};
echo $operation;

switch (8.0) {
    case '8.0':
        $result = 'строка';
        break;
    case 8.0:
        $result = 'число';
        break;
}
echo $result; //строка

match (8.0) {
    '8.0' => $result = 'строка',
    8.0 => $result = 'число',
 };
 echo $result; // число


