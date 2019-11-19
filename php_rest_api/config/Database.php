<?php 
    class Database {
        // DB prams
        private $host = "localhost";
        private $db_name = "blog";
        private $username = "root";
        private $password = "";
        private $conn;


        // DB connect

        public function connect(){
            $this->conn = null;
            $dns = "mysql:host=$this->host;dbname=$this->db_name";

            try{
                $this->conn = new PDO($dns,$this->username,$this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){
                echo "Connection Error: ".$e->getMessage();

            }

            // RETURN CONNECTION OBJECT
            return $this->conn;
        }

    }    


?>