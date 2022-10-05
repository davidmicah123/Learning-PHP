<?php

    class BankAccount{
        private $accountBalance = 5000;

        public function displayBalance(){
            return $this->accountBalance;
        }

    }


    // $dan = new BankAccount;
    // echo $dan->displayBalance();
    // echo $dan->accountBalance;


    class circle {
        const pi = 3.141;

        public function area($radius){
            return self::pi * ($radius*$radius);
        }


    }

    $circle = new circle;
    echo $circle->area(100);
?>