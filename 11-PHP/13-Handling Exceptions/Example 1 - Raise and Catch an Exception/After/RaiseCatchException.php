<?php


    //Throw your own exceptions
    function divide($x, $y) : int{
        if($y <= 0){
            throw new Exception("Divide by Zero Exception might happen");
        }
        $result = $x / $y;
        return $result;
    }

    try{

        $result =  divide(1, 0);

    }catch(Exception $e){

        echo 'Caught exception: ', $e->getMessage(), "\n";

    }
