<?php


class Bank
{

    public $accno;
    public $name;
    public $balance = 0;

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt){

        if($this->balance <= 0){
            echo "No Balance in the Account." . PHP_EOL;
            return;
        }

        if($this->balance < $amt){
            echo "Requested Amount is greater than Balance." . PHP_EOL;
            return;
        }

        $this->balance = $this->balance - $amt;
    }

    function checkBalance(){
        echo "Your Balance: $this->balance" . PHP_EOL;
    }
}

$bank1 = new Bank();
$bank1->accno = 101;
$bank1->name = "John, Smith";
$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkBalance();
$bank1->deductAmount(100);
$bank1->checkBalance();
$bank1->deductAmount(1000);
$bank1->checkBalance();