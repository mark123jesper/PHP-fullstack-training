<?php

    //Check if File
    //$fileName = "TestFile.txt";
    $fileName = "MyFolder";

    //Check File Exists
    if( file_exists($fileName) ){
        echo "File Exists" .PHP_EOL;

        //Check it is Directory
        if( is_dir($fileName) ){
            //Exit out of the Program
            die("It is a Directory not file");
        }

        //Copy File
        copy($fileName , "CopyFile.txt");
        copy("CopyFile.txt", "CopyFile1.txt");
        //Rename File
        rename( "CopyFile1.txt", "RenamedFile.txt");
        copy("RenamedFile.txt", "RenamedFileDeleted.txt");
        //Delete File
        unlink( "RenamedFileDeleted.txt" );

    }else{
        echo "File Does not Exists" .PHP_EOL;
        die("No Such File");
    }