<?php
// Конструкция if..else
$a = 4;
if ($a > 0) {
    echo 'Переменная a больше нуля';
} else {
    echo 'Переменная а меньше нуля';
}
echo '<br> конец выполнения программы';

//elseif
$a = 0;
if ($a > 0) {
    echo 'Переменная а больше нуля';
} elseif ($a < 0) {
    echo' Переменная а меньше нуля';
} else {
    echo 'Переменная а равна нулю';
}

// Определение условия
if (0) {} // false
if (-0.0) {} // false
if (-1) {} // true
if ("") {} // false
if ("a") {} // true
if (null) {} // false

//Альтернативный синтаксис if
$a = 5;
if ($a > 0) : 
    echo 'Переменная а больше нуля';
elseif ($a < 0) :
    echo 'Переменная а меньше нуля';
else : 
    echo "Переменная а равна нулю";
endif;
?>

//Комбинированный режим html и php
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8' />
</head>
<body>
<?php
$a = -5;
?>

<?php if ($a > 0) { ?>
    <h2>Переменная а больше нуля</h2>
<?php } elseif ($a < 0) { ?>
    <h2>Переменная а меньше нуля</h2>
<?php } else { ?>
    <h2>Переменная а равна нулю</h2>
<?php } ?>
</body>
</html>

// Альтернативный синтаксис
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset='utf-8'>
</head>
<body>
<?php $a = 0; ?>

<?php if ($a > 0): ?>
    <h2>Переменная а больше нуля</h2>
<?php elseif ($a < 0): ?>
    <h2>Переменная а меньше нуля</h2>
<?php else: ?>
    <h2>Переменная а равна нулю</h2>
<?php endif; ?>
</body>
</html>



