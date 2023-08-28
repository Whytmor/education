<?php
// функция is_array
$users = ['Tom', 'Bob', 'Sam'];
$isArray = is_array($users);
echo ($isArray ==  true) ? 'Это массив' : 'это не массив';

//count/sizeof - кол-во элементов массива
$users = ['Tom', 'Bob', 'Sam'];
$number = count($users);
//тоже самое, что $number = sizeof($users)
echo "В массиве users {$number} элемента/ов";

//shuffle - перемешивает элементы массива
$users = ['Tom', 'Bob', 'Sam'];
shuffle($users);
print_r($users);

//compact() - из переменных ассоциативный массив , где ключи - имена переменных
$model = 'Apple II';
$producer = "apple";
$year = 1978;

$data = compact('model', 'producer', 'year');
print_r($data);
// получится следующий вывод
// Array ( [model] => Apple II [producer] => Apple [year] => 1978 ) 
