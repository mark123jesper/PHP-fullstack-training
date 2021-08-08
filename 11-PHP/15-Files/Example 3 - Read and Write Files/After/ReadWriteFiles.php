<?php

    //Open a File
    //Read File Content
    //Close the File

    //File Modes
    //r - Read
    //w - write
    //a - append

    //Method 1
    //File Name
    $fileName = "content.txt";

    //Read the File
    $content = file_get_contents($fileName);

    //Print the Content of File
    echo $content . PHP_EOL;

    //Method 2
    //Open a File
    $fileHandler = fopen( $fileName, "r" );
    $fileSize = filesize( $fileName );

    //Read File Content
    $content = fread($fileHandler, $fileSize);
    echo $content;

    //Close the File
    fclose($fileHandler);

    //Good Practise
    if( file_exists($fileName) ){
        if( is_file($fileName) ){
            //Do the File Operation Here
        }
    }

    //Write Operations - Method 1
    $fileHandler = fopen( $fileName, "w+" ) or die("Unable to write the file.");
    fwrite($fileHandler, "This is a modified Content!");
    fclose($fileHandler);

    //Write Operations - Method 2
    $fileName1 = "NewFile.txt";
    file_put_contents( $fileName1 , "This is a modified Content!" );


