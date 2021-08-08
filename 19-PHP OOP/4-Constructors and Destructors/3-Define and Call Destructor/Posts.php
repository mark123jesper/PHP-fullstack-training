<?php


class Posts
{
    function __construct(){
        echo "This is Constructor!" . PHP_EOL;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

}

//See how the constructor and destructor gets called
$post1 = new Posts();
