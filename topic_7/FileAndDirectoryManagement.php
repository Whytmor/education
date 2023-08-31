<?php
// перемещение файла rename()
if (!rename('Hello.txt', 'subdir/hello.txt')) {
    echo 'Ошибка перемещения файла';
} else {
    echo 'Файл перемещен';
}

// Копирование файла copy()

if (copy('hello.txt', 'hello_copy.txt')) {
    echo 'Копия файла создана';
} else {
    echo 'Ошибка при копировании файла';
}

//Удаление файла
if (unlink('hello_copy.txt')) {
    echo 'Файл удалён';
} else {
    echo 'Ошибка при удалении файла';
}

//создание каталога
if (mkdir(newdir)) {
    echo 'Каталог создан'
} else 'Ошибка при удалении каталога';

//Удаление каталога
if (rmdir('newdir')) {
    echo 'Каталог удалён';
} else {
    'Ошибка при удалении каталога';
}

//Операции с каталогами
$path = getcwd();
echo $path; // c:\localhost

$dir = getcwd(); // получаем текущий каталог
if (is_dir($dir)) { // является ли путь каталогов
    if ($dh = opendir($dir)) {
        //считываем по одном файл или подкаталогу пока не дойдём до конца
        while (($file = readdir($dh)) !== false) {
            // пропускаем символы .. и . 
            if (file == '.' || $file == '..') {
                continue;
            }
            if (is_dir($file)) {
                echo "Каталог : {$file}<br>";
            } else {
                echo "Файл : {$file}<br>"
            }
            closedir($dh);
        }
    }
}