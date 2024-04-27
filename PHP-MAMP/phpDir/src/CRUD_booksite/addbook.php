<?php
include 'db.php';


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];

    // Prepare SQL statement
    $sql = "INSERT INTO books (title, description, author, publishing_year, genre)
            VALUES ('$title', '$description', '$author', '$year', '$genre')";

    // Execute SQL statement
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: display.php');
    } else {
        echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="addbook.css">
    <link rel="stylesheet" href="animations.css">
    <title>Booksite</title>
</head>

<body>

    <div class="form-container">
        <form method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Atomic Habits">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author</label>
                <input type="text" name="author" class="form-control" placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Year</label>
                <input type="number" name="year" class="form-control" placeholder="1984">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Genre</label>
                <select class="form-control" name="genre" id="exampleFormControlSelect1">
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
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Add book</button>
        </form>
    </div>

</body>

</html>