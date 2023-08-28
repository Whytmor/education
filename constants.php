<?php
// const PI = 3.14;
// echo PI;
const PI = 2.1415 + 1;
echo PI; //3.1516

define('NUMBER', 22);
echo NUMBER; // 22


echo " <br>Строка " . __LINE__ . " в файле" . __FILE__;

// Проверка существования константы
const PI1 = 3.14;
if (!defined('PI1')) {
    define('PI1', 3.14);
} else {
    echo 'Константа PI1 уже определена!';
}

