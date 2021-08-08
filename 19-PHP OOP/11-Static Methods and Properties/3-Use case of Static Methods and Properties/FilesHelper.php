<?php

class FilesHelper{

    static function hasData($fileName) : bool {
        if(!file_exists($fileName)){
            echo "$fileName does not exists" .PHP_EOL;
            return false;
        }
        $content = file_get_contents($fileName);
        if(empty($content)){
            return false;
        }else{
            return true;
        }
    }

}

echo FilesHelper::hasData("Test.txt");
