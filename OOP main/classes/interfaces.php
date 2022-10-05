<?php
    // Interfaces
    interface paymentInterface{
        public function payNow();
    }
    interface loginInterface{
        public function loginFirst();
    }

    class Paypal implements paymentInterface, loginInterface{
        public function loginFirst(){}
        public function payNow(){}
        public function paymentProcess(){
            $this->loginFirst;
            $this->payNow();
        }
    }
    class BankTransfer implements paymentInterface, loginInterface{
        public function loginFirst(){}
        public function payNow(){}
        public function paymentProcess(){
            $this->loginFirst;
            $this->payNow();
        }
    }
    class Visa implements paymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }
    class Cash implements paymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }
    class BuyProduct{
        public function pay(paymentInterface $payment_type){
            $payment_type->paymentProcess();
        }
    }


    $payment_type = new Cash();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($payment_type);

?>