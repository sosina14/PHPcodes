<?php
include 'db.php';
$stmt = $pdo->query("SELECT * FROM books");
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css"> <!-- Linking CSS -->

</head>
<body>
<h1>Welcome to the Library Management System</h1>

   
    <a href="search.php">Search Books</a> |
    <a href="add.php">Add New Book</a>


    <h3>Book List</h3>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <?php echo $book['title']; ?> by <?php echo $book['author']; ?>
                <a href="edit.php?id=<?php echo $book['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $book['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
