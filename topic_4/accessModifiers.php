<?php
class PersonMod
{
    private $privateA = 'private';
    public $publicA = 'public';
    protected $protectedA = 'protected';

    private function getPrivateMethod()
    {
        echo 'private method<br>';
    }
    protected function getProtectedMethod()
    {
        echo 'protected method<br>';
    }
    public function getPublicMethod()
    {
        echo 'public method<br>';
    }
    function test()
    {
        $this -> getPrivateMethod();
        $this -> getProtectedMethod();
        $this -> getPublicMethod();

        echo "{$this -> privateA}<br>";
        echo "{$this -> protectedA} <br>";
        echo "{$this -> publicA} <br>";
    }
}

class Employee extends PersonMod
{
    function test()
    {
        // echo $this -> privateA; // нельзя так как privateA - private в классе-родителе
        echo $this -> protectedA;
        echo $this -> publicA;
        // $this -> getPrivateMethod(); // нельзя так как private в классе-родителе
        $this -> getProtectedMethod();
        $this -> getPublicMethod();
    }
}

$person = new PersonMod;
//person -> getPrivateMethod() // недоступно так как private
//person -> getProtectedMethod() // недоступно так как protected
$person -> getPublicMethod();
//echo $person -> privateA; // недоступно так как private
//echo $person -> protectedA; // недоступно так как protected
echo $person -> publicA; 