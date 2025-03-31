<?php
include 'db.php';
$stmt = $pdo->query("SELECT * FROM books");
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bookstore</title>
</head>
<body>
    <h1>Book List</h1>
    <a href="add.php">Add New Book</a>
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
