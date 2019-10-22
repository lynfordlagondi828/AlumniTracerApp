<?php
    class DbConfig{

        private $conn;

        function __construct()
        {
            
        }

        //database connection setup
        function database_connect(){
            
            $this->conn = new PDO('mysql:host=localhost;dbname=norsu_bsc','root','');
            return $this->conn;
        }
    }
?>