<?php
include 'db.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM books WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$title = $row['title'];
$description = $row['description'];
$author = $row['author'];
$year = $row['publishing_year'];
$genre = $row['genre'];

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    // Prepare SQL statement
    $sql = "UPDATE books SET title=?, description=?, publishing_year=?, genre=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssisi", $title, $description, $year, $genre, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header('Location: display.php');
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animations.css">
    <title>Booksite</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #313e4d;">
        <div class="container">
            <a class="navbar-brand" href="display.php">Home</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Adventure">Adventure</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Classic+Literature">Classic Literature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Coming-of-age">Coming-of-age</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Fantasy">Fantasy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Historical">Historical Fiction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Horror">Horror</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Mystery">Mystery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Romance">Romance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display.php?genre=Science+Fiction">Science Fiction</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form-container">
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" class="form-control" value=<?php echo $title ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author</label>
                <input type="text" name="author" class="form-control" value=<?php echo $author ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Year</label>
                <input type="number" name="year" class="form-control" value=<?php echo $year ?>>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Genre</label>
                <select class="form-control" name="genre" id="exampleFormControlSelect1">
                    <option><?php echo $genre ?></option>
                    <option>Classic Literature</option>
                    <option>Science Fiction</option>
                    <option>Romance</option>
                    <option>Adventure</option>
                    <option>Coming-of-age</option>
                    <option>Fantasy</option>
                    <option>Horror</option>
                    <option>Mystery</option>
                    <option>Historical Fiction</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Decription</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"><?php echo $description ?></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Update</button>
        </form>
    </div>
</body>

</html>