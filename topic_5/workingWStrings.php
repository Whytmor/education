<?php
$str1 = "hello";
$str2 = 'welcome';

$s = <<< LABEL 
Hello world!
Bye world.. 
LABEL;
echo $s;

$name = 'Tom';
$age = 36;
$s = <<< USER
Name = $name
Age = $age
USER;
echo $s;

//Обращение к символам строки
$str = 'Hello Tom';
echo $str[0]; // получим  1 символ - H
$str[1] = 'i'; // поменяем 2 символ
echo '<br>' . $str . '<br>'; // Hillo Tom

//strpos() и mb_strpos()
$input = 'This is the end';
$search = 'is';
$position = strpos($input, $search); // 2
if ($position !== false) {
    echo "Позиция подстроки {$search} в строке {$input}: {$position}";
}

$input = 'Мама мыла раму';
$search = 'мы';
$position = strpos($input, $search); // 9 (кириллица!)
$position = mb_strpos($input, $search); // 5

//strrpos
$input = 'This is the end';
$search = 'is';
$position = strrpos($input, $search); // 5
$position = mb_strrpos($input, $search);

//trim - удаляет пробелы и спец символы с начала и конца
$input = '   Мама мыла  раму    ';
$input = trim($input);

//изменение регистра strtolower
$input = 'The world is mine';
$input = strtolower($input);
$input = mb_strtolower($input);

// strlen
$input = 'hello world';
$num = strlen($input);
echo $num;

$input = 'Мама мыла раму';
$num = mb_strlen($input);
echo $num;

//Получение подстроки
$input = 'The world is mine!';
$subinput1 = substr($input, 2);
$subinput2 = substr($input, 2, 6);
echo $subinput1;
echo '<br>';
echo $subinput2;

$input = 'мама мыла раму';
$subinput1 = mb_substr($input, 2);
$subinput2 = mb_substr($input, 2, 6);

// Замена подстрок
$input = 'Мама мыла раму';
$input = str_replace('мы', 'ши', $input);
echo $input;



