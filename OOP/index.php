<?php

    class BankAccount{
        public $balance = 0;
        public $type = '';

        public function setType($type){
           $this->type = $type;
        }

        public function displayBalance(){
            return $this->balance;
        }

        public function withdraw($amount){
            if( ($this->balance < $amount) ){
                echo 'not enough money'.'<br>';
            }else{
                $this->balance = $this->balance - $amount;
            }

        }

        public function deposit($amount){
            $this->balance = $this->balance + $amount;
        }

    }

    class SavingsAccount extends BankAccount{

        public $type = '18-25';



    }

    $dan = new BankAccount;
    $dan->settype('18 - 25 Current');
    $dan->deposit(400);
    $dan->withdraw(230);
    echo $dan->type.' Has '.$dan->displayBalance().'<br>';
    
    $dan_savings = new SavingsAccount;
    $dan_savings->settype('supersaver');
    $dan_savings->deposit(1400);
    $dan_savings->type.'<br>';
    echo $dan_savings->type.' Has '.$dan_savings->displayBalance().'<br>';

    // New instance of class
    // $david = new BankAccount;
    
    // // Withdrawing 
    // // $david->withdraw(30);
    
    // // Deposit
    // $david->deposit(5000);
    // $david->withdraw(50);

    // // displaying balance
    // echo $david->displayBalance();

    
    // $david = new BankAccount;
    // $wale = new BankAccount;
    
    // $david->deposit(5000);
    // $wale->deposit(200);

    // $david->withdraw(1000);
    // $wale->withdraw(20);

    // echo 'David: '.$david->displayBalance().'<br>';
    // echo 'Wale: '.$wale->displayBalance().'<br>';

?>