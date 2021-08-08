<?php

//Sample 1: Without Return Type and Try Catch Block
//Sample 2: With Return Type and Try Catch Block

class Files
{

    function displayContent($fileName) : bool
    {
        $result = true;

        try{

            echo "Read the Content of file: $fileName" . PHP_EOL;
            $content = file_get_contents($fileName);
            echo "Displaying content of file: $fileName" . PHP_EOL;
            echo $content;

        }catch(Exception $e){
            $result = false;
        }

        return $result;
    }

}

$files1 = new Files();
$files1->displayContent("Test.txt");
//OOP brings reusability to your code.
$files1->displayContent("Test1.txt");


