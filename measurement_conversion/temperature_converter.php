<?php
/*
1. Temperature:
Convert temperature from Celsius to Fahrenheit
Convert temperature from Celsius to Kelvin
2. Speed
Convert kilometers per hour to meters per second
Convert kilometers per hour to knots
3. Mass
Convert kilogram to grams
Convert grams to kilograms
*/
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">

<head>
    <title>Measurement Conversion App</title>
</head>

<body>
    <div class="conversion_container">
        <?php include 'header.php' ?>
        <h2>Temperature Conversion</h2>
        <div class="container">
            <form method="post">
                Celsius: <input type="number" name="celsius"><br>
                Fahrenheit: <input type="number" name="fahrenheit"><br>
                <?php
                if (isset($_POST['submit_temp'])) {
                    $celsius = $_POST['celsius'];
                    $fahrenheit = $_POST['fahrenheit'];

                    if (!empty($celsius)) {
                        $fahrenheit = $celsius * 9 / 5 + 32;
                        echo "Fahrenheit: " . $fahrenheit . '</br>';
                    }

                    if (!empty($fahrenheit)) {
                        $celsius = ($fahrenheit - 32) * 5 / 9;
                        echo "Celsius: " . $celsius;
                    }
                    if (empty($celsius) && empty($fahrenheit)) {
                        echo "<p class='warning'>Enter a number</p>";
                    }
                }
                ?>
                <input type="submit" name="submit_temp" value="Convert">
            </form>
        </div>
    </div>



</body>

</html>