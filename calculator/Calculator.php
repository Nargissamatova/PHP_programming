<?php
/*
Idea of this first task 01 is to write PHP code to make a simple calculator

addition
subtraction
multiplication
division
Requirements/Specs

Create a folder e.g. “calculator” inside phpDir of src of PHP-MAMP
You can write your code inside that folder
Feel free to use any CSS styling, HTML syntax
Use Object oriented approach (e.g. using class, constructor)
Keep it simple
*/

class Calculator
{
    public $num1 = 0;
    public $num2 = 0;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function addition()
    {
        return $this->num1 + $this->num2;
    }
    public function subtraction()
    {
        return $this->num1 - $this->num2;
    }
    public function multiplication()
    {
        return $this->num1 * $this->num2;
    }
    public function division()
    {
        return $this->num1 / $this->num2;
    }
}

// Check if num1 and num2 are set in $_GET
$num1 = isset($_GET['num1']) ? $_GET['num1'] : 0;
$num2 = isset($_GET['num2']) ? $_GET['num2'] : 0;

$test = new Calculator($num1, $num2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP calculator</title>
</head>

<body>
    <div class="container">
        <h2>Simple calculator</h2>
        <form action="Calculator.php" method="get">
            <input type="number" name="num1">
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>

            </select>
            <input type="number" name="num2">
            <input type="submit" value="submit" name="submit">
        </form>
        <p>
            <?php
            // Check if the form was submitted
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['submit'])) {
                // check if number is entered
                if (empty($_GET['num1']) || empty($_GET['num2'])) {
                    echo '<span style="color:crimson">Please enter a number for both fields.</span>';
                } else {
                    // check type of operation
                    if ($_GET['operation'] == '+') {
                        echo 'The answer is: ' . $test->addition();
                    } elseif ($_GET['operation'] == '-') {
                        echo 'The answer is: ' . $test->subtraction();
                    } elseif ($_GET['operation'] == '*') {
                        echo 'The answer is: ' . $test->multiplication();
                    } elseif ($_GET['operation'] == '/') {
                        echo 'The answer is: ' . $test->division();
                    }
                }
            }
            ?>
        </p>
    </div>

</body>

</html>