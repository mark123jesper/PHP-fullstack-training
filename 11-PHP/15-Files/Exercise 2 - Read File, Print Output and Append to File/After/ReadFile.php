<?php

    file_put_contents("NewFile.txt", "Some more new text\r\n", FILE_APPEND);

    $fileHandler = fopen("NewFile.txt", "r");

    $content = fread( $fileHandler, filesize("NewFile.txt") );
    echo $content . PHP_EOL;

    fclose($fileHandler);

    

    
