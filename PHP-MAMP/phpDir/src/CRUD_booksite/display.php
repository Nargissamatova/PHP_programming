<?php
require_once 'db.php';

// retrieve all books from the 'books' table
$result = $conn->query("SELECT * FROM books");

// create an array to hold the book data
$rows = array();
// fetch each row of book data and add it to the $rows array
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

/*
echo "<pre style='color:white'>";
print_r($rows); // or var_dump($rows);
echo "</pre>";
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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


    <div class="container">
        <button class="btn btn-success my-5">
            <a class="text-light" href="addbook.php">Add book </a>
        </button>
    </div>
    <div class="container">
        <?php $genreName = isset($_GET['genre']) ? $_GET['genre'] : "All Books";
        ?>
        <h2 class="text-light"><?= $genreName ?></h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Publishing Year</th>
                    <th>Genre</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0) : ?>
                    <?php foreach ($result as $row) : ?>
                        <?php if ((!isset($_GET['genre']) || $_GET['genre'] === $row['genre'])) : ?>
                            <tr data-id="<?= $row['id'] ?>">
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['title'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td><?= $row['author'] ?></td>
                                <td><?= $row['publishing_year'] ?></td>
                                <td><?= $row['genre'] ?></td>
                                <!-- get id from row that was clicked -->
                                <td><button class="btn btn-secondary"><a href="update.php?updateid=<?= $row['id'] ?>" class="text-light">Update</a></button></td>
                                <td><button class=" btn btn-danger"><a href="delete.php?deleteid=<?= $row['id'] ?>" class="text-light">Delete</a></button></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td>No results</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!--
                // check if the genre is set and matches the book s genre or if the genre is not set (display all books)
                if ((!isset($_GET['genre']) || $_GET['genre'] === $book['genre'])) {
                    echo '<section class="book">';
                    echo '<a class="bookmark fa ' . ($isFavorited ? 'fa-star' : 'fa-star-o') . '" href="setfavorite.php?id=' . $book['id'] . '"></a>';
                    echo '<h3>' . $book['title'] . '</h3>';
                    echo '<p class="publishing-info">';
                    echo '<span class="author">' . $book['author'] . '</span>,';
                    echo '<span class="year">' . $book['publishing_year'] . '</span>';
                    echo '</p>';
                    echo '<p class="description">';
                    echo $book['description'];
                    echo '</p>';
                    echo '</section>';
                }

-->