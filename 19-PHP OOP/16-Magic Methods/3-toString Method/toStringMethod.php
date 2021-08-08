<?php

//public __toString ( void ) : string

class Teacher{

    function __toString() : string{
        return "To String method is called" . PHP_EOL;
    }

}

$teacher = new Teacher();
echo $teacher->name;
echo $teacher;
