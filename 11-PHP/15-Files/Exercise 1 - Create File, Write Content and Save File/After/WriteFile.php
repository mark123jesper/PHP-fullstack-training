<?php

    $fileHandler = fopen("NewFile.txt", "w+");

    fwrite($fileHandler, "This is Some Text1\r\n");
    fwrite($fileHandler, "This is Some Text2\r\n");

    fclose($fileHandler);

    file_put_contents("NewFile.txt", "Some more new text", FILE_APPEND);

