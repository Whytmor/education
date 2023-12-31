<?php
//способы определения массивов
$numbers = array();
$numbers = [];

$numbers = array(1, 2, 3, 4);
$numbers = [1, 2, 3, 4];

//индексированный массив
//обращение к элементу массива
$numbers = [1, 4, 9, 16];
echo $numbers[2]; //9

//изменение элемента массива
$numbers = [1, 4, 9, 16];
$numbers[1] = 6;
echo $numbers[1];

// Неверное обращение
$numbers = [1, 4, 9, 16];
echo $numbers[4]; // элемента нет

// установка элемента по несуществующему индексу
$numbers = [1, 4, 9, 16];
$numbers[5] = 76;
echo $numbers[5]; // 76

//другой способ установки нового элемента
$numbers = [1, 4, 9, 16];
$numbers[] = 25;
echo $numbers[4]; // 25

//наглядное представление ключ-значение
$numbers = [1, 4, 9, 16];
$numbers[] = 25; 
print_r($numbers);

// Добавление элементов в массив без инициализации массива
$numbers[] = 20;
$numbers[] = 120;
$numbers[] = 720;
print_r($numbers); // array ([0] => 20 [1] => 120 ..)

//оператор => - сопостовляет ключ с определённым значением
$numbers = [1, 4, 9, 16];

$numbers = [0 => 1, 1 => 4, 2 => 9, 3 => 16];
//numbers = array(0=>1, 1=>4, 2=>9 ..);

//переопределение порядка индексов
$numbers = [1 => 1, 2 => 4, 5 => 25, 4 => 16];
echo $numbers[2]; // 4

$numbers = [4 => 16, 25, 36, 49, 64];
print_r($numbers);

// Перебор массива (for)
$users = ['Tom', 'Sam', 'Bob', 'Alice'];
$num = count($users);
for ($i = 0; $i < $num; $i++) {
    echo "{$users[$id]} <br />";
}

// Перебор массива (foreach)
//Извлечение элемента массива
$users = [1 => 'Tom', 4 => 'Sam', 5 => 'Bob', 21 => 'Alice'];
foreach ($users as $element) {
    echo "{$element} <br />";
}

//Извлечение ключа и его элемента
$users = [1 => 'Tom', 4 => 'Sam', 5 => 'Bob', 21 => 'Alice'];
foreach ($users as $key => $value) {
    echo "{$key} - {$value} <br />";
}
