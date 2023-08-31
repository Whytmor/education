<?php
//сохраним
$name = 'Tom';
$age = 36;
setcookie('name', $name);
setcookie('age', $age, time() + 3600); // срок действия 1 час
echo 'Куки установлены';

// Получение cookie
if (isset($_COOKIE['name'])) {
    echo "name:" . $_COOKIE['name'] . "<br>";
}
if(isset($_COOKIE['age'])) {
    echo 'Age:' . $_COOKIE['age'] . '<br>';
}

// сохранение массивов в cookie
setcookie('lang[1]', 'PHP');
setcookie('land[2]', 'C#');
setcookie('lang[3]', 'JAVA');

if (isset($_COOKIE['lang'])) {
    foreach ($_COOKIE['land'] as $name -> $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "{$name} . {$value} <br />";
    }
}

// Удаление cookie
setcookie('name', '', time() - 3600);