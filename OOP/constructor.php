<?php
    class Example{
        public function __construct($something){
            $this->saySomething($something);
        }
        public function saySomething($something){
            echo $something;
        }
    }


    $example = new Example('welcome boys');

?>