<?php
//sth
include 'db.php';

$title = $author = $genre = $year = "";
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['title'])) {
        $errors[] = "Book title is required.";
    } else {
        $title = htmlspecialchars($_POST['title']);
    }

    if (empty($_POST['author'])) {
        $errors[] = "Author name is required.";
    } else {
        $author = htmlspecialchars($_POST['author']);
    }

    if (!empty($_POST['published_year']) && !is_numeric($_POST['published_year'])) {
        $errors[] = "Published year must be a number.";
    } else {
        $year = $_POST['published_year'];
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO books (title, author, genre, published_year) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $author, $_POST['genre'], $year]);
        echo "Book added successfully!";
    }
}
?>

<!-- HTML Form -->
<form method="POST">
    Title: <input type="text" name="title" required><br>
    Author: <input type="text" name="author" required><br>
    Genre: <input type="text" name="genre"><br>
    Year: <input type="number" name="published_year"><br>
    <input type="submit" value="Add Book">
</form>

<!-- Display errors -->
<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error) : ?>
            <li style="color: red;"><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
