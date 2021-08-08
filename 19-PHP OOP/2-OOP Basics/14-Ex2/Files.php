<?php


class Files
{

    function displayContent($fileName){
        if(!file_exists($fileName)){
            echo "$fileName does not exists" .PHP_EOL;
            return;
        }
        echo file_get_contents($fileName) .PHP_EOL;
    }

    function getContent($fileName) : string{
        if(!file_exists($fileName)){
            echo "$fileName does not exists" .PHP_EOL;
            return "";
        }
        $content =  file_get_contents($fileName);
        return $content .PHP_EOL;
    }
}

$file1 = new Files();
$file1->displayContent("Test.txt");
echo "Here is your File Content: " . $file1->getContent("Test.txt");
