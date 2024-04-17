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
        <h2>Speed Conversion</h2>
        <div class="container">
            <form method="post">
                M/s: <input type="text" name="mps"><br>
                Km/h: <input type="text" name="kmph"><br>
                <?php
                if (isset($_POST['submit_speed'])) {
                    $mps = $_POST['mps'];
                    $kmph = $_POST['kmph'];

                    if (!empty($mps)) {
                        $kmph = $mps * 3.6;
                        echo "Km/h: " . $kmph . ' ';
                    }

                    if (!empty($kmph)) {
                        $mps = $kmph / 3.6;
                        echo "M/s: " . $mps;
                    }
                    if (empty($mps) && empty($kmph)) {
                        echo "<p class='warning'>Enter a number</p>";
                    }
                }
                ?>
                <input type="submit" name="submit_speed" value="Convert">

            </form>

        </div>
</body>

</html>