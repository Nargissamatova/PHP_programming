<?php
//Dbh -> database handler
// PDO -> PHP Data Object

class Dbh{
 private $host = 'db';
 private $dbname = 'myfirstdatabase';
 private $dbusername = 'root';
 private $dbpassword = '';

 protected function connect(){
    try{
    // Creating a new PDO object to establish a connection to the database
     $pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);

    // Setting error mode to exception, so PDO will throw exceptions if any error occurs
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Returning the PDO object to be used for performing database operations
    return $pdo;

    }catch(PDOException $e){
    // If any exception occurs during connection attempt, it will be caught here
    // and a descriptive error message will be displayed
        die("Connection failed: " . $e->getMessage());
    }
 }

}



/*
catch(PDOException $e) { ... }: This line begins the catch block, which is executed if an exception of type PDOException is thrown within the corresponding try block.

$e: This is the variable that holds the exception object. In PHP, when an exception occurs, an object representing that exception is created. This object contains information about the exception, such as its message, code, file, and line where it occurred.

"Connection failed: " . $e->getMessage(): This line is where the error message is constructed. It uses concatenation (.) to combine the string "Connection failed: " with the error message obtained from the exception object using the getMessage() method. The getMessage() method returns the error message associated with the exception.

 The die() function is used to immediately terminate the script execution and display an error message. In this case, it prints the error message constructed in the previous line. The script execution stops after the error message is displayed.
*/