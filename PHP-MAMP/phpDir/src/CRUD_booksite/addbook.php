<?php
include 'db.php';

$errors = []; // array to store validation errors

if (isset($_POST['submit'])) {
    if (empty($_POST['title'])) {
        $errors['title'] = 'Please enter a title.';
    }
    if (empty($_POST['author'])) {
        $errors['author'] = 'Please enter an author.';
    }
    if (empty($_POST['year'])) {
        $errors['year'] = 'Please enter a year.';
    } elseif (!is_numeric($_POST['year'])) {
        $errors['year'] = 'Please enter a valid year.';
    }
    if (empty($_POST['description'])) {
        $errors['description'] = 'Please enter a description.';
    }

    // if no validation errors, proceed with inserting data into the database
    if (empty($errors)) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $genre = $_POST['genre'];

        $sql = "INSERT INTO books (title, description, author, publishing_year, genre)
                VALUES ('$title', '$description', '$author', '$year', '$genre')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header('Location: display.php');
            exit(); // stop further execution
        } else {
            echo 'Error: ' . $sql . '<br>' . mysqli_error($conn);
        }
    }
}

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
                        <a class="nav-link" href="display.php?genre=Historical+Fiction">Historical Fiction</a>
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
                <input type="text" name="title" class="form-control" placeholder="Atomic Habits">
                <?php if (isset($errors['title'])) : ?>
                    <div class="text-danger"><?php echo $errors['title']; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Author</label>
                <input type="text" name="author" class="form-control" placeholder="John Doe">
                <?php if (isset($errors['author'])) : ?>
                    <div class="text-danger"><?php echo $errors['author']; ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Year</label>
                <input type="number" name="year" class="form-control" placeholder="1984">
                <?php if (isset($errors['year'])) : ?>
                    <div class="text-danger"><?php echo $errors['year']; ?></div>
                <?php endif; ?>
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
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                <?php if (isset($errors['description'])) : ?>
                    <div class="text-danger"><?php echo $errors['description']; ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-success" name="submit">Add book</button>
        </form>
    </div>

</body>

</html>