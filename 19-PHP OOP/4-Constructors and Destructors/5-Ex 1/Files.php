<?php


class Files
{
    public $fileName;
    public $fileHandler = null;
    public $fileSize;
    public $content;
    public $fileFound = false;

    function __construct($fileName)
    {
        $this->fileName = $fileName;
        if( file_exists($fileName) ){
            if( is_file($fileName) ){
                $this->fileFound = true;
            }
        }

        if($this->fileFound){
            //Open a File
            $this->fileHandler = fopen( $fileName, "r" );
            $this->fileSize = filesize( $fileName );
        }
    }

    function getContent() : string {

        if($this->fileFound) {
            //Read File Content
            $content = fread($this->fileHandler, $this->fileSize);
            return $content . PHP_EOL;
        }else{
            return "No Files Found!";
        }
    }

    function __destruct()
    {
        if($this->fileFound){
            fclose($this->fileHandler);
            echo "File is closed from Destructor" . PHP_EOL;
        }
    }
}

$file1 = new Files("Test.txt");
echo $file1->getContent();
