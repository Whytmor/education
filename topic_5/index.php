<?php 
// //includes
include __DIR__ . '/scripts/welcome.php';
@include_once __DIR__ . '/scripts/welcome.php';
//requires - лучше использовать их, если получим ошибку выполнение ВСЕГО скрипта остановится
//@require __DIR__ . '/scripts/welcome.php';
//@require_once __DIR__ . '/scripts/welcome.php';

$name = 'Tom<br>';
welcome($name);

$name = 'Sam<br>';
welcome($name);

//spl_autoload_register
function my_autoloader($class)
{
    echo "Вызов функции автозагрузки<br>";
    @include __DIR__ . '/scripts/person.php';
}
spl_autoload_register('my_autoloader');

$tom = new Person('Tom', 25);
$tom -> printInfo();