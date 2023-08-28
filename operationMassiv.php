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
print_r($data); // array ( [model] => Apple II [producer] => Apple [year] => 1978 ) 



//сортировка массивов
//asort сортировка по элементам
$users = ['Tom', 'Bob', 'Sam', 'Alice'];
asort($users);
print_r($users);
// вывод отсортированного массива
// array ( [3] => Alice [1] => Bob [2] => Sam [0] => Tom )
asort($users, SORT_STRING);

arsort($users);
print_r($users);

//ksort сортировка по ключам
$states = ['Spain' => 'Madrid', 'France' => 'Paris', 'Germany' => 'Berlin'];
asort($states); // по значениям
print_r($states); // array ( [Germany] => Berlin [Spain] => Madrid [France] => Paris ) 

ksort($states); // по ключам
print_r($states); //  array ( [France] => Paris [Germany] => Berlin [Spain] => Madrid )

//Естественная сортировка
$os = ['Windows 7', 'Windows 8', 'Windows 10'];
asort($os);
print_r($os); // array ( [2] => Windows 10 [0] => Windows 7 [1] => Windows 8 ) 

//Решение - natsort()
$os = ['Windows 10', 'Windows 7', 'Windows 8'];
natsort($os);
print_r($os); // array ( [0] => Windows 7 [1] => Windows 8 [2] => Windows 10) 
natcasesort($os); // не учитывает регистр