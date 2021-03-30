<?php
    class db{
        private $mysqli;
        function connect(){
            $this->mysqli = new mysqli("localhost","root","","shopshock");
            if ($this->mysqli->connect_error){
                echo "Failed to connect to MySQL: " .$mysqli->connect_error;
                exit();
            }else{
                echo "Connect success...";
            }
        }
        function query($sql){
            $result = $this->mysqli->query($sql);
            //$this->debug_text($sql);
            $data = $result->fetch_all(MYSQLI_ASSOC);
            return $data;
        }
        function closedb(){
            print("db close");
            $this->mysqli->close();
        }
    }
    //$mydb = new db();
    //$mydb -> connect();
    //print_r($mydb->query("select * from product"));
?>