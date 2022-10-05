<?php

    class Test extends Dbh{

        public function getFood(){
            $sql = "SELECT * FROM food";
            $stmt = $this->connect()->query($sql);

            while($row = $stmt->fetch()){
                echo $row['food'].'<br';
                // var_dump($row);
            }
        }

        public function getFoodStmt($food){
            $sql = "SELECT * FROM food where food = :food ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(['food' => $food]);

            $foods = $stmt->fetchAll();

            foreach ($foods as $food) {
                echo $food['calories'].'<br>';
            }
        }
        public function setFoodStmt($food, $calories, $healthy_unhealthy){
            $sql = "INSERT INTO food(food, calories, healthy_unhealthy) VALUES(:food, :calories, :healthy_unhealthy)";
            $stmt = $this->connect()->prepare($sql);
            if($stmt->execute(['food' => $food, 'calories' => $calories, 'healthy_unhealthy' => $healthy_unhealthy])){
                echo 'Food inserted';
            }else{
                echo 'An error occured';
            }
        }

    }


?>