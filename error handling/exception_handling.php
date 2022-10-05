<?php
    // function divide($param1, $param2){
    //     if ($param2 == 0) {
    //         throw new Exception('Cannot divide by zero');
    //     }else{
    //         return $param1/$param2;
    //     }
    // }

    // // echo divide(10, 0);


    $age = 16;
    // try{
    //     if ($age > 18) {
    //         echo 'Old enough';
    //     }else{
    //         throw new Exception('Not old enough');
    //     }
    // }catch (Exception $ex){
    //     echo 'ERROR: '.$ex->getMessage();
    // }


    class myException extends Exception{
        public function showSpecific(){
            return 'Error thrown on '.$this->getLine().' in '.$this->getFile();
        }
    }

    class dbException extends Exception{
        public function showSpecific(){
            return 'Error thrown on '.$this->getLine().' in '.$this->getFile();
        }
    }

    

    try {
        
        if ($age > 18) {
            throw new myException();
        }else if(1 == 1){
            throw new dbException();
        }else{
            echo 'okay good';
        }

    } catch (myException $ex) {
        echo $ex->showSpecific();        
    }catch (dbException $ex) {
        echo $ex->showSpecific();        
    }
    
?>