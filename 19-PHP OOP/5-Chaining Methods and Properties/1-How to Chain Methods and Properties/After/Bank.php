<?php


class Bank
{

    public $accno;
    public $name;
    public $balance = 0;

    function __construct($accno, $name)
    {
        $this->accno = $accno;
        $this->name = $name;
    }

    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
        return $this;
    }

    function deductAmount($amt){

        if($this->balance <= 0){
            echo "No Balance in the Account." . PHP_EOL;
            return $this;
        }

        if($this->balance < $amt){
            echo "Requested Amount is greater than Balance." . PHP_EOL;
            return $this;
        }

        $this->balance = $this->balance - $amt;
        return $this;
    }

    function checkBalance(){
        echo "Your Balance: $this->balance" . PHP_EOL;
        return $this;
    }
}

$bank1 = new Bank(101, "John, Smith");
$bank1->depositAmount(500)->checkBalance();
$bank1->deductAmount(100)->checkBalance();
echo $bank1->deductAmount(1000)->checkBalance()->balance;