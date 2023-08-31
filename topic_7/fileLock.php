<?php
// flock для ограничения доступа к файлу
$fd = fopen('hello.txt', 'r+') or die ('Ошибка открытия файла');
$str = 'Hello world'ж

if (flock($fd, LOCK_EX)) { //установка исключительной блокировки на запись
    fseek($fd, 0, SEEK_END); // Переход в конец файла
    fwrite($fd, "{$str}") or die ('Ошибка записи'); // запись
    flock($fd, LOCK_UN); //снятие блокировки
}
fclose($fd);


//ftruncate - стереть содержимое и перезаписать файл по новому
$fd = fopen('hello.txt', 'r+') or die('Ошибка открытие файла');
$str = 'Hello world';

if (flock($fd, LOCK_EX)) { // установка исключительной блокировки
    ftruncate($fd, 0); // очищаем файл
    fwrite($fd, "{$str}") or die('Ошибка записи');
    flock($fd, LOCK_UN); //снятие блокировки
}
fclose($fd);