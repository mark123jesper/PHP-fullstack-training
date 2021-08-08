<?php


final class University
{
    public $name = "Boston University";
    final function hello()
    {
        echo "Hello from University Class" . PHP_EOL;
    }
}

//Teacher class cannot extend University Class
/*class Teacher extends University
{

    public $name = "Jane";

    function hello()
    {
        echo "Hello from Teacher Class" . PHP_EOL;
        parent::hello();
    }
}

$teacher1 = new Teacher();
$teacher1->hello();
*/