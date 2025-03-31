<?php
include 'db.php';

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare("DELETE FROM books WHERE id = ?");
    $stmt->execute([$_GET['id']]);

    header("Location: index.php");
}
?>
