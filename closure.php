<?php

$number = 89;

$showNumber = function () use ($number)
{
    echo $number;
};
$showNumber();

$a = 8;
$b = 10;

$closure = function ($c) use ($a, $b)
{
    return $a + $b + $c;
};

$result = $closure(22); // 40
echo $result;