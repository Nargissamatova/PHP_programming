<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="conversion_container">
        <?php include 'header.php' ?>
        <h2>Mass Conversion</h2>
        <div class="container">
            <form method="post">
                Kilograms: <input type="text" name="kilograms"><br>
                Pounds: <input type="text" name="pounds"><br>
                <?php
                if (isset($_POST['submit_mass'])) {
                    $kilograms = $_POST['kilograms'];
                    $pounds = $_POST['pounds'];

                    if (!empty($kilograms)) {
                        $pounds = $kilograms * 2.20462;
                        echo "Pounds: " . $pounds . ' ';
                    }

                    if (!empty($pounds)) {
                        $kilograms = $pounds / 2.20462;
                        echo "Kilograms: " . $kilograms;
                    }
                    if (empty($kilograms) && empty($pounds)) {
                        echo "<p class='warning'>Enter a number</p>";
                    }
                }
                ?>
                <input type="submit" name="submit_mass" value="Convert">
            </form>
        </div>
    </div>
</body>

</html>