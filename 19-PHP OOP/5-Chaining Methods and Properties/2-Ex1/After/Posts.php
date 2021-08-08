<?php


class Posts
{
    public $content;

    function __construct($content){
        echo "This is Constructor!" . PHP_EOL;
        $this->content = $content;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){
        echo $this->content . PHP_EOL;
        return $this;
    }
}

//See how the constructor and destructor gets called
$post1 = new Posts("This is the Post Content");
//Print and Get the Content of the Post at the same time.
$content = $post1->printContent()->content;
echo $content . PHP_EOL;