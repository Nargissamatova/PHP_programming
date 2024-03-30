<?php
//Dbh -> database handler

class Dbh{
 private $host = 'db';
 private $dbname = 'myfirstdatabase';
 private $dbusername = 'root';
 private $dbpassword = '';

 protected function connect(){
    try{
    // pdo object - connection to database
    $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
    // error mode setting
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Make sure to return the $pdo
    return $pdo;
    }catch(PDOException $e){
        die("Connection failed: " . $e->getMessage());
    }
 }

}