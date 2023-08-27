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


