<?php
function add($a, $b) 
{
    return $a + $b;
}

$result = add(5, 6);
echo $result; //11

echo add(4, 8); //12

function add1($a, $b) 
{
    $sum = $a + $b;
    return $sum; // завершение функции
    echo "sum = {$sum}"; // эта строка не будет выполнятся
}

echo add1(5, 5);

function add2($a, $b)
{
    $sum = $a + $b;
    echo "sum = {$sum}";
}
$result = add2(10, 10);
if ($result == null) {
    echo 'result равен null';
} else {
    echo 'result не равен null';
} 


