<?php
namespace work;
class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}

include __DIR__ . '/scripts/person.php';
$tom = new \base\classes\PersonNamespace('Tom');
echo $tom -> name;
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset='utf8'>
    </head>
    <body>
        <?php
        $tom = new Person('Tom');
        echo $tom -> name;
        ?>
    </body>
</html>

