<?php


class Bank
{
    private $balance;

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    //Set the balance when account is created
    function __construct($balance)
    {
        $this->balance = $balance;
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


}

$bank1 = new Bank(100);
echo $bank1->getBalance();
$bank1->depositAmount(500);
echo $bank1->getBalance();
$bank1->deductAmount(500);
echo $bank1->getBalance();

//You cannot change the balance without the methods.
//No one can access the balance property and modify it.
$bank1->balance = 999; //Error Line