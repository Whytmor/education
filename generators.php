<?php
function generator()
{
    yield 21;
}

foreach (generator() as $number) {
    echo $number; // 21
}

//generator();

function generateNumber()
{
    for ($i = 0; $i <= 5; $i++) {
        yield $i;
    }
}
foreach (generateNumber() as $number) {
    echo $number . "<br />";
}

function generateNumbers1() 
{
    for ($i = 10; $i <= 15; $i++) {
        yield $i;
    }
}

foreach (generateNumbers1() as $index => $number) {
    echo "{$index} - $number<br />"; // 012345
}

//оператор yield + from
function generateNumbers()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
}

foreach (generateNumbers() as $number) {
    echo $number . "<br />"; // 12345
}

function generateNumberss($start, $end)
{
    for ($i = $start; $i < $end; $i++) {
        yield $i;
    }
}
foreach (generateNumberss(4, 9) as $number) {
    echo $number . '<br />';
}

// перебор массива обычным способом - с большими данными затратно!
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo $number; // 12345
}


