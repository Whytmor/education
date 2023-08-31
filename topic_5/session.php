<?php
session_start();
echo session_id();//идентификатор сессии
echo session_name(); //имя -phpsessid

echo $_COOKIE['PHPSESSID'];
//сохранение данных в сессии
$_SESSION['name'] = 'Sam';
$_SESSION['age'] = 41;
echo 'Данные сохранены в сессии';

//получение данных сессии
if (isset($_SESSION['name']) && isset($_SESSION['age'])) {
    $name = $_SESSION['name'];
    $age = $_SESSION['age'];
    echo "Name: {$name} <br> Age: {$age}";
}

//Удаление данных сессии
unset($_SESSION['age']); //Удаляем из сессии переменную age
session_destroy(); // удаляем все данные сесии