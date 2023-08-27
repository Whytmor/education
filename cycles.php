<?php
for ($i = 1; $i < 10; $i++) {
    echo "Квадрат числа $i равен " . $i * $i . '<br/>';
}

$i = 5;
for (; $i < 10; $i++) {
    echo $i;
}

$i = 0;
for (; $i < 10;) {
    echo $i;
    $i += 2;
}

for ($i = 1, $j = 1; $i + $j < 10; $i++, $j += 2) {
    echo "{$i} + {$j} = " . $i + $j . "<br>";
}


