<?php
abstract class MessengerTest
{

}
//$telegram = new MessengerTest(); // эта строка не будет работать
abstract class Messenger
{
    abstract function send($message); // абстрактный метод
}

abstract class MessengerWork
{
    protected $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo 'Выход из мессенджера...<br>';
    }
}
class EmailMessenger extends MessengerWork
{
    function send($message)
    {
        echo "{$this -> name} отправляет сообщение: {$message} <br>";
    }
}
$outlook = new EmailMessenger('outlook');
$outlook -> send("Hello PHP 8");
$outlook -> close();