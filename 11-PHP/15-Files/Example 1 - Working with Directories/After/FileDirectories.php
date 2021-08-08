<?php

    /*
    1) List all Files in a Directory
    2) Check If the Name is a Directory or File.
    3) Check for Specific Files in a Directory
    4) Create Directory
    5) Copy Files between Directories.
    */

    //Sample 1: List all Files in a Directory
    //scandir
    //$path = "TestFolder1";
    $path = ".";
    $path = "..";
    $result = scandir($path);
    foreach($result as $dir){
        echo $dir . PHP_EOL;
    }


    //Remove the . and ..
    $directory = array_diff($result,  [ '.', '..']);
    print_r($directory);
    count($directory);

    foreach($directory as $dir){
        echo $dir . PHP_EOL;
    }

    //Sample 2 and 3
    //Check If the Name is a Directory or File.
    //Check for Specific Files in a Directory
    //is_file or is_dir
    $result = scandir("TestFolder1");
    $directory = array_diff($result,  [ '.', '..']);
    foreach($directory as $dir){
        if( is_file("TestFolder1/" . $dir) ){
            echo $dir . PHP_EOL;
        }
    }

    //Create Directory
    //Copy Files between Directories.
    //glob method
    //FileSize
    $result = glob("*.php");
    print_r( $result );

    if( !file_exists("TestFolder3")){
        //Create Directory
        mkdir("TestFolder3");
    }

    //Copy Files
    copy("TestFolder1/File1.txt", "TestFolder2/File2.txt");