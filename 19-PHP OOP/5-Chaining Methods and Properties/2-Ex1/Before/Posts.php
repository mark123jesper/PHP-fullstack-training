<?php


class Posts
{
    public $content;

    function __construct(){
        echo "This is Constructor!" . PHP_EOL;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){

    }

}

$post1 = new Posts();
//Print and Get the $content property from the $post1 at the same time.
