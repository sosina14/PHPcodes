<?php
include 'db.php';

$book = null;
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $book = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_year = $_POST['published_year'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE books SET title = ?, author = ?, genre = ?, published_year = ? WHERE id = ?");
    $stmt->execute([$title, $author, $genre, $published_year, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        Title: <input type="text" name="title" value="<?php echo $book['title']; ?>" required><br>
        Author: <input type="text" name="author" value="<?php echo $book['author']; ?>" required><br>
        Genre: <input type="text" name="genre" value="<?php echo $book['genre']; ?>"><br>
        Published Year: <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>" min="1900" max="2100"><br>
        <input type="submit" value="Update Book">
    </form>
</body>
</html>
