<?php
$a; 
echo $a;

//оператор isset
$message;
if (isset($message)) {
    echo $message;
} else {
    echo 'переменная message не определена';
}

$message = 'Hello PHP';
if (isset($message)) {
    echo $message;
} else {
    echo 'переменная message не определена';
}

// значение null isset вернёт false
$message = null;
if (isset($message)) {
    echo $message;
} else {
    echo 'переменная не определена';
}