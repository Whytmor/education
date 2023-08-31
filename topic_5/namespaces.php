<?php
namespace work;
include __DIR__ . '/scripts/person.php';

use \base\classes\Person as User, \base\classes\Employee as Employee;
//use \base\classes\Person;
// use \base\classes\{Person as User, Employee as Employee};

class Person
{
    public $name;
    function __construct($name)
    {
        $this -> name = $name;
    }
}

$tom = new \base\classes\Person('Tom');
echo $tom -> name;

$tom = new \base\classes\Person('Tomas');
echo $tom -> name . '<br>';
$bob = new \base\classes\Person('Bob');
echo $bob -> name . '<br>';

$tom = new User('Tomm');
echo $tom -> name . '<br>';
$bob = new User('Bobb');
echo $bob -> name . '<br>';

$tom = new Person('Tomas');
echo $tom -> name . '<br>';

$bob = new Employee('Bob');
echo $bob -> name . '<br>';
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

