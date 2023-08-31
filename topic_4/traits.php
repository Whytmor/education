<?php
trait Printer 
{
    public function printSimpleText($text) 
    {
        echo "{$text}<br>";
    }
    public function printHeaderText($text) 
    {
        echo "<h2>{$text}</h2>";
    }
}

class Message 
{
    use Printer;
}

$myMessage = new Message();
$myMessage -> printSimpleText("Hello world");
$myMessage -> printHeaderText("Hello PHP 8");

class Data
{
    function print()
    {
        echo 'Print from Data';
    }
}

trait Pprinter
{
    function print() 
    {
        echo "Print from Pprinter";
    }
}
class Mess extends Data
{
    use Pprinter;
}

$myMessage = new Mess();
$myMessage -> print(); // print from Pprinter

