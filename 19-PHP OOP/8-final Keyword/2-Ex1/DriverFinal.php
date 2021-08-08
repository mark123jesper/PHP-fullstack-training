<?php


final class DriverFinal{

    private $updateInstructions = "Instructions";

    final function runDriverUpdate(){
        echo 'executing the update instructions' . PHP_EOL;
    }
}

//class WindowsProgram extends DriverFinal{
    //Cannot Extend DriverFinal.
//}