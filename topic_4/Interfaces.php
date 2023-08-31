<?php
interface Messenger 
{
    function send();
}
class EmailMessenger implements Messenger
{
    function send()
    {
        echo 'Отправка сообщения на e-mail<br>';
    }
}

$outlook = new EmailMessenger();
$outlook -> send();
// наследование 1 интерфейса от другого
interface EmailMessenger1 extends Messenger
{

}
class SimpleEmailMessenger implements EmailMessenger1
{
    function send()
    {
        echo "Отправка сообщения на email.<br>";
    }
}
$outlook = new SimpleEmailMessenger();
$outlook -> send();

interface Mess
{
    function send($message);
}
function sendMessage(Mess $messenger, $text)
{
    $messenger -> send($text);
}
class EmailMesenger implements Mess 
{
    function send($message)
    {
        echo "ОТправка сообщения на email: {$message}<br>";
    }
}

$outlook = new EmailMesenger();
sendMessage($outlook, "hello world<br>");

// Множественное применение интерфейсов
interface Camera
{
    function makeVideo();
    function makePhoto();
}
interface Messenger1
{
    function sendMessage($message);
}
class Mobile implements Camera, Messenger1
{
    function makeVideo()
    {
        echo 'Запись видео<br>';
    }
    function makePhoto()
    {
        echo 'съемка фото<br>';
    }
    function sendMessage($message)
    {
        echo "Отправка сообщения {$message}<br>";
    }
}

$iphone12 = new Mobile();
$iphone12->makePhoto();
$iphone12->sendMessage("Сообщение пришло!<br>");
