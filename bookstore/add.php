<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_year = $_POST['published_year'];

    $stmt = $pdo->prepare("INSERT INTO books (title, author, genre, published_year) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $author, $genre, $published_year]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form method="POST">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Genre: <input type="text" name="genre"><br>
        Published Year: <input type="number" name="published_year" min="1900" max="2100"><br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>
