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

for ($i = 1; $i < 10; $i++):
    echo "Квадраn числа $i равен" . $i * $i . "<br/>";
endfor;

//цикл while
$countr = 1;
while ($counter < 10) {
    echo $counter * $counter . "<br />";
    $counter++;
}

$counter = 0; 
while ($counter < 10)
    echo $counter * $counter . "<br />";

$couner = 1;
while ($couner < 10):
    echo $couner * $counter . "<br />";
    $counter;
endwhile;

//цикл do..while
$counter = 1;
do {
    echo $counter * $counter . "<br />";
    $counter++;
} while($counter < 10);

//Оператор break
for ($i = 1; $i < 10; $i++) {
    $result - $i * $i;
    if ($result > 80) {
        break;
    }
    echo "Квадрат числа {$i} равен {$result} <br />" ;
}


