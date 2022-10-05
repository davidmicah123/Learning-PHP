<?php



    class Dbh{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db_name = "a_database";


        protected function connect(){
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        }
        
    }



?>