<?php
    class Database{

        const HOST = "localhost:3307";
        const USER = "root";
        const PASSWORD = "";
        const DB_NAME = "ql_doan";
        public $connect;
        
        public function connect() {
            try {   
                $connect = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASSWORD);
                // echo "success!";
            } catch (Exception $e) {
                // echo "failed";
            }
            return $connect;
        }
    }
