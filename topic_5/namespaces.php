<?php
namespace base;
class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}
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

