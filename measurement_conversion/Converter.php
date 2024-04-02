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

<head>
    <title>Measurement Conversion App</title>
</head>

<body>

    <h2>Temperature Conversion</h2>
    <form method="post">
        Celsius: <input type="text" name="celsius"><br>
        Fahrenheit: <input type="text" name="fahrenheit"><br>
        <input type="submit" name="submit_temp" value="Convert">
    </form>

    <?php
    if (isset($_POST['submit_temp'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = $_POST['fahrenheit'];

        if (!empty($celsius)) {
            $fahrenheit = $celsius * 9 / 5 + 32;
            echo "Fahrenheit: " . $fahrenheit;
        }

        if (!empty($fahrenheit)) {
            $celsius = ($fahrenheit - 32) * 5 / 9;
            echo "Celsius: " . $celsius;
        }
    }
    ?>

    <h2>Speed Conversion</h2>
    <form method="post">
        M/s: <input type="text" name="mps"><br>
        Km/h: <input type="text" name="kmph"><br>
        <input type="submit" name="submit_speed" value="Convert">
    </form>

    <?php
    if (isset($_POST['submit_speed'])) {
        $mps = $_POST['mps'];
        $kmph = $_POST['kmph'];

        if (!empty($mps)) {
            $kmph = $mps * 3.6;
            echo "Km/h: " . $kmph;
        }

        if (!empty($kmph)) {
            $mps = $kmph / 3.6;
            echo "M/s: " . $mps;
        }
    }
    ?>

    <h2>Mass Conversion</h2>
    <form method="post">
        Kilograms: <input type="text" name="kilograms"><br>
        Pounds: <input type="text" name="pounds"><br>
        <input type="submit" name="submit_mass" value="Convert">
    </form>

    <?php
    if (isset($_POST['submit_mass'])) {
        $kilograms = $_POST['kilograms'];
        $pounds = $_POST['pounds'];

        if (!empty($kilograms)) {
            $pounds = $kilograms * 2.20462;
            echo "Pounds: " . $pounds;
        }

        if (!empty($pounds)) {
            $kilograms = $pounds / 2.20462;
            echo "Kilograms: " . $kilograms;
        }
    }
    ?>

</body>

</html>