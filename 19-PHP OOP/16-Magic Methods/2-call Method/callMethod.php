<?php

class Posts{

    //Check this program with and without this function.
    function __call($name, $arguments){
        echo $name . PHP_EOL;
        echo $arguments . PHP_EOL;
    }
}

$post1 = new Posts();
$post1->createPosts("This is a sample posts");
