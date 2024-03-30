<?php

class Signup extends Dbh
{
    private $username;
    private $pwd; // stands for password

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    private function insertUser()
    {
        $query = "INSERT INTO users ('username', 'pwd) VALUES (:username, :pwd);"; //inserting data to sql table

        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }
}
