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

        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }

    private function isEmptySubmit()
    {
        if (isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser()
    {
        // Error handler
        if ($this->isEmptySubmit()) { // if it s true, returns error
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }
        // If no errors, signup user
        $this->insertUser();
    }
}
