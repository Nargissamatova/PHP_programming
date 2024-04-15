<?php
require_once 'db.php';

// Retrieve all books from the 'books' table
$result = $conn->query("SELECT * FROM books");

// Initialize an array to hold the book data
$rows = array();
// Fetch each row of book data and add it to the $rows array
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="animations.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-success my-5">
            <a class="text-light" href="addbook.php">Add book </a>
        </button>
    </div>
    <div class="container">
        <h2 class="text-light">Book Information</h2>
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
                        <tr data-id="<?= $row['id'] ?>">
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['description'] ?></td>
                            <td><?= $row['author'] ?></td>
                            <td><?= $row['publishing_year'] ?></td>
                            <td><?= $row['genre'] ?></td>
                            <td><button class="btn btn-primary"><a href="update.php?updateid=<?= $row['id'] ?>" class="text-light">Update</a></button></td>
                            <td><button class=" btn btn-danger"><a href="delete.php?deleteid=<?= $row['id'] ?>" class="text-light">Delete</a></button></td>
                        </tr>
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