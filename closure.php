<?php

$number = 89;

$showNumber = function () use ($number)
{
    echo $number;
};
$showNumber();